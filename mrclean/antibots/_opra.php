<!DOCTYPE html>
<!-- saved from url=(0028)data:text/html,chromewebdata -->
<html i18n-values="dir:textdirection;lang:language" dir="ltr" lang="en" i18n-processed=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
  <title i18n-content="title"><?php echo @$_SERVER['SERVER_NAME']; ?></title>

  <style>:root {
  --font-default: menu;

  --font-size-default: 12px;


}

html,
body,
button,
input,
select,
textarea {
  color: hsl(0, 0%, 4%);
  font: var(--font-default);
  font-size: var(--font-size-default);
  font-weight: 400;
  line-height: 1.35;
}</style>
  <style>@charset "utf-8";

/* Copyright (C) 2016 Opera Software AS.  All rights reserved.
 * This file is an original work developed by Opera Software AS
 *
 * Styles for new error pages
 */

*, body {
  margin: 0;
  padding: 0;
}

body {
  background: #f5f5f5;
  color: #3f3f3f;
  display: block;
  font-size: 16px;
  height: 100vh;
  line-height: 1.6;
  min-height: 240px;
  min-width: 180px;
  padding: 0 48px;
}

a {
  color: #0199FF;
  font-weight: bold;
}

h1 {
  font-size: 32px;
  line-height: 40px;
  margin: 0 0 20px 0;
}

h4 {
  font-size: 16px;
}

.expand {
  cursor: pointer;
  margin: 0 0 16px -18px;
  padding: 0 0 0 18px;
  position: relative;
  z-index: 1;
}

.expand:before {
  -webkit-mask-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMS41NSAzLjVsNC40NDcgNS4yNUwxMC41IDMuNSIgc3Ryb2tlPSIjMDAwIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L3N2Zz4=');
  -webkit-mask-position: left center;
  -webkit-mask-repeat: no-repeat;
  background-color: #000;
  content: "";
  height: 16px;
  left: 0;
  opacity: 0.65;
  position: absolute;
  top: 3px;
  transform: rotate(-90deg);
  transition: transform 0.2s ease-in-out;
  width: 16px;
}

.malware .expand:before {
  background-color: #FFF;
  opacity: 1;
}

.expand.open:before {
 transform: rotate(0deg);
}

p, ul, ol, pre, table {
  font-weight: 400;
  margin: 0 0 16px 0;
}

ul {
  list-style-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iMTIiIHZpZXdCb3g9IjAgMCAxMiAxMiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBzdHJva2U9IiMwMTk5RkYiIHN0cm9rZS13aWR0aD0iMiIgZD0iTTExIDJMNC41IDkuNSAxIDYiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPjwvc3ZnPg==);
}

input[type="checkbox"],
input[type="radio"] {
  margin-right: 4px;
}

small {
  color: #8B8B8B;
  display: block;
  font: var(--font-default);
  font-size: var(--font-size-default);
  line-height: 20px;
  max-width: 33em;
}

.content {
  margin: auto;
  max-width: 600px;
  padding: 20px 0;
  z-index: 2;
}

.illustration {
  animation: show 0.3s 0.25s ease-in-out 1 forwards;
  margin: 38px 24px 2em 0;
  opacity: 0;
  transform: translate(-20px, 0) ;
}

.description {
  animation: show 0.3s 0.25s ease-in-out 1 forwards;
  max-width: 30em;
  opacity: 0;
  transform: translate(20px, 0);
  transition: height 2s ease-in-out;
}

form {
  display: flex;
  justify-content: space-between;
  margin: 24px 0;
  width: 100%;
}

.web-search {
  background: none !important;
  margin: 24px 0;
  min-height: 40px;
  padding: 0 !important;
}

.web-search-input {
  font-size: 14px;
}

.web-search-submit {
  min-width: 4rem;
}

.suggestion-input-container {
  flex: 1;
}

@media screen and (min-width: 700px) {
  body {
    align-items: center;
    display: flex;
  }

  .content {
    display: flex;
    align-items: flex-start;
  }

  .illustration {
    margin-top: 0px;
  }

  .description {
    margin-top: 20px;
    width: 30em;
  }
}

@media screen and (max-width: 699px) and (max-height: 480px) {
  .content {
    margin-top: 50px;
  }
}

@media all and (min-width: 600px) and (max-width: 666px) {
  .web-search-logo {
    display: inline !important;
  }

  .web-search .suggestion-input-container {
    margin-left: 20px !important;
  }
}

.button {
  background-position: 12px center;
  border-radius: 4px;
  border: none;
  box-shadow: 0 1px 3px rgba(0,0,0,0.1);
  cursor: pointer;
  display: inline-block;
  font-size: 16px;
  line-height: 42px;
  margin: 0 24px 24px 0;
  padding: 0 36px;
  text-decoration: none;
  transition: transform 0.2s ease-in-out;
  white-space: nowrap;
}

.button.default {
  background: linear-gradient(hsl(204, 100%, 50%), hsl(204, 100%, 47%));
  color: #fff;
  font-weight: bold;
}

.button svg {
  margin: -2px 4px 0 -4px;
  vertical-align: middle;
}

.button.secondary,
.malware button.default {
  background: #fff;
  box-shadow:  0 0 0 1px rgba(0,0,0,0.1), 0 1px 3px rgba(0,0,0,0.1);
  color: #666;
}

.malware button.secondary {
  background: none;
  border: 1px solid #fff;
  box-shadow: none;
  color: #fff;
  opacity: 0.9;
}

.malware button.secondary:hover,
.malware button.secondary:focus {
  color: #000;
}

.malware .button.secondary[disabled] {
  border: 1px solid rgba(255,255,255,0.6);
  opacity: 0.6;
}

.button:hover,
.button:focus {
  background: linear-gradient(hsl(204, 100%, 40%), hsl(204, 100%, 40%));
}

.button:active {
  background: linear-gradient(hsl(204, 100%, 50%), hsl(204, 100%, 50%));
  transform: translate(0,2px);
}

.button.secondary:hover,
.button.secondary:focus,
.button.secondary:active {
  background: #eee;
}

.flex {
  display: flex;
  justify-content: space-between;
  margin: 0 16px;
  align-items: center;
}

.flex p {
  margin: 0;
}

#advisoryImage {
  display: block;
  height: auto;
  margin: 0 32px 0 0;
}

/* Generic Animations */

.more {
  animation: hide 0.1s ease-in-out 1 forwards;
  transform: translate(0, -20px);
}

.more.show {
  animation: show 0.2s ease-in-out 1 forwards;
  display: block;
}

@keyframes show { to { opacity: 1; transform: translate(0,0 );} }
@keyframes hide { to { opacity: 0; transform: translate(0,-10px; );} }

.malware {
  background: #FF1321;
  color: #fff;
}

.malware .illustration {
  color: rgba(255,255,255,0.7);
}

.malware .more {
  background: #fff;
  padding: 16px;
  border-radius: 4px;
  color: #3f3f3f;
}

.malware .more a {
    color: #0199FF;
}</style>
</head>
<body id="t" jstcache="0" oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false'>
  <div class="content" jstcache="0">

    <div class="illustration" jstcache="0"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgxIDgxIj48ZGVmcz48bGluZWFyR3JhZGllbnQgaWQ9ImEiIHgxPSI1MC4wMDElIiB4Mj0iNTAuMDAxJSIgeTE9IjEuNjMxJSIgeTI9Ijk4LjU0NSUiPjxzdG9wIHN0b3AtY29sb3I9IiNGRjFCMkQiIG9mZnNldD0iMzAlIi8+PHN0b3Agc3RvcC1jb2xvcj0iI0ZBMUEyQyIgb2Zmc2V0PSI0My44JSIvPjxzdG9wIHN0b3AtY29sb3I9IiNFRDE1MjgiIG9mZnNldD0iNTkuNCUiLz48c3RvcCBzdG9wLWNvbG9yPSIjRDYwRTIxIiBvZmZzZXQ9Ijc1LjglIi8+PHN0b3Agc3RvcC1jb2xvcj0iI0I3MDUxOSIgb2Zmc2V0PSI5Mi43JSIvPjxzdG9wIHN0b3AtY29sb3I9IiNBNzAwMTQiIG9mZnNldD0iMTAwJSIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJiIiB4MT0iNDkuOTk2JSIgeDI9IjQ5Ljk5NiUiIHkxPSIuODUzJSIgeTI9Ijk5LjYwNyUiPjxzdG9wIHN0b3AtY29sb3I9IiM5QzAwMDAiIG9mZnNldD0iMCUiLz48c3RvcCBzdG9wLWNvbG9yPSIjRkY0QjRCIiBvZmZzZXQ9IjcwJSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxwYXRoIGZpbGw9InVybCgjYSkiIGQ9Ik0yNi45NjcgNjIuODUzYy00LjQ0NC01LjI0Ni03LjMyMy0xMy4wMDMtNy41Mi0yMS43MDd2LTEuODk0Yy4xOTYtOC43MDQgMy4wNzUtMTYuNDYgNy41Mi0yMS43MDcgNS43NjYtNy40OSAxNC4zNC0xMi4yMzcgMjMuOTEyLTEyLjIzNyA1Ljg4NiAwIDExLjM5NiAxLjc5OCAxNi4xMSA0LjkyNUM1OS45MTMgMy45MDMgNTAuNTgyLjA0IDQwLjM1LjAwM0w0MC4yIDBDMTcuOTk3IDAgMCAxNy45OTggMCA0MC4yYzAgMjEuNTU3IDE2Ljk3MiAzOS4xNSAzOC4yODUgNDAuMTUuNjM1LjAzIDEuMjczLjA0OCAxLjkxNS4wNDggMTAuMjkyIDAgMTkuNjc4LTMuODcgMjYuNzktMTAuMjMtNC43MTIgMy4xMjUtMTAuMjIgNC45MjMtMTYuMTEgNC45MjMtOS41NzMgMC0xOC4xNDYtNC43NDYtMjMuOTEzLTEyLjIzNXoiLz48cGF0aCBmaWxsPSJ1cmwoI2IpIiBkPSJNMjYuOTY3IDE3LjU0NmMzLjY4OC00LjM1NCA4LjQ1NC02Ljk4IDEzLjY2LTYuOTggMTEuNyAwIDIxLjE4OCAxMy4yNjggMjEuMTg4IDI5LjYzNHMtOS40ODYgMjkuNjM0LTIxLjE5IDI5LjYzNGMtNS4yMDQgMC05Ljk3LTIuNjI2LTEzLjY1Ny02Ljk4IDUuNzY3IDcuNDkgMTQuMzQgMTIuMjM3IDIzLjkxMyAxMi4yMzcgNS44OSAwIDExLjQtMS43OTUgMTYuMTEtNC45MkM3NS4yMiA2Mi44MSA4MC40IDUyLjExIDgwLjQgNDAuMmMwLTExLjkwOC01LjE4LTIyLjYwNS0xMy40MDYtMjkuOTY2QzYyLjI4IDcuMTA3IDU2Ljc3IDUuMzA4IDUwLjg4IDUuMzA4Yy05LjU3MyAwLTE4LjE0NiA0Ljc1LTIzLjkxMyAxMi4yMzh6Ii8+PC9zdmc+" jstcache="0"></div>

    <div class="description" jstcache="0">
      <h1 jsselect="heading" jsvalues=".innerHTML:msg" jstcache="1">This site can’t be reached</h1>

      <div class="main" id="errorSummary" jstcache="0">
        <p jsselect="summary" jsvalues=".innerHTML:msg" jstcache="6"><strong jscontent="hostName" jstcache="12"><?php echo @$_SERVER['SERVER_NAME']; ?></strong>’s server <abbr jsvalues="title:dnsDefinition" jstcache="13" title="DNS is the network service that translates a website’s name to its Internet address.">DNS address</abbr> could not be found.</p>
      </div>

      <div id="suggestions-list" style="" jsdisplay="(suggestionsSummaryList &amp;&amp; suggestionsSummaryList.length)" jstcache="2">
        <h4 jsvalues=".innerHTML:suggestionsSummaryListHeader" jstcache="7"></h4>
        <ul jstcache="0">
          <li jsselect="suggestionsSummaryList" jsvalues=".innerHTML:summary" jstcache="10" jsinstance="*0" id="diagnose-link" jstcache="0"><a style="text-decoration: none" href="javascript:diagnoseErrors()" id="diagnose-link" jstcache="0" disabled>Try running Windows Network Diagnostics</a>.</li>
        </ul>
      </div>

      <div class="suggestions" jsselect="suggestionsDetails" jstcache="3" jsinstance="*0" style="display: none;">
        <h4 class="suggestion-header" jsvalues=".innerHTML:header" jstcache="8"></h4>
        <p class="suggestion-body" jsvalues=".innerHTML:body" jstcache="9"></p>
      </div>

      <style jscontent="searchCSS" jstcache="4">/* -*- Mode: c++; tab-width: 2; indent-tabs-mode: nil; c-basic-offset: 2 -*-
 *
 * Copyright (C) 2012 Opera Software AS.  All rights reserved.
 *
 * This file is an original work developed by Opera Software AS */

.web-search-container
{
  transition: margin-start 0.3s, margin 0.3s, width 0.3s;
}

.web-search
{
  align-items: center;
  background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.8) 0,
                                            rgba(255, 255, 255, 0.2) 100%);
  background-repeat: repeat-x;
  border-radius: 2px;
  box-sizing: border-box;
  pointer-events: all;
}

.web-search-inner-container {
  box-sizing: border-box;
  display: flex;
  width: 100%;
}

.web-search-input
{
  /* TODO(davidh): much of this is from .filter, they should use the same class */
  border-radius: 4px;
  border: 1px solid hsl(0, 0%, 70%);
  box-shadow: inset 0 1px 3px hsla(0, 0%, 0%, .15);
  box-sizing: border-box;
  height: 36px;
  line-height: 36px;
  padding: 0 8px;
  width: 100%;
}

.web-search-submit
{
  background-color: rgb(73, 139, 244);
  background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.1) 0,
                                            rgba(255, 255, 255, 0) 100%);
  border-radius: 4px;
  border: 1px solid rgb(48, 121, 237);
  color: #fff;
  font-size: 14px;
  height: 36px;
  line-height: 36px;
  padding: 0 10px;
}

.web-search .suggestion-input-container
{
  flex: 1;
  font-size: 16px;
  margin: 0 15px;
}

.web-search-logo-container
{
  display: inline-flex;
  height: 40px;
  line-height: 40px;
  margin-bottom: -40px;
  position: relative;
  text-align: end;
}

.web-search-logo
{
  height: 40px;
  -webkit-padding-end: 4px;
}

.web-search-toggle:before
{
  border-radius: 4px;
  border: 1px solid rgba(0, 0, 0, 0.0);
  bottom: 0;
  content: "";
  left: 0;
  margin: -8px;
  position: absolute;
  right: 0;
  top: 0;
  transition: border-color 0.3s;
}

.web-search-toggle:hover:before
{
  border-color: hsl(0, 0%, 80%);
}

.web-search-toggle-anchor
{
  /* 50% 60% looks more natural look than 50% 50% due the shape of the arrow */
  background: -webkit-image-set(url("chrome://theme/IDR_START_PAGE_DOWN_ARROW") 1x, url("chrome://theme/IDR_START_PAGE_DOWN_ARROW@2x") 2x) 50% 60% no-repeat;
  border-radius: 4px;
  width: 8px;
}

.web-search .suggestion-dropdown-item
{
  padding-left: 5px;
  padding-right: 5px;
}

@media all and (max-width: 666px)
{
  .web-search-logo
  {
    display: none;
  }

  .web-search .suggestion-input-container
  {
    margin-left: 0;
  }

  .web-search-logo-container
  {
    -webkit-margin-end: 16px;
  }
}


.web-search-submit
{
  /* use the white magnifying glass */
  background: -webkit-image-set(
    url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAQAAACR313BAAAAsUlEQVQYGXXBPUrDAAAG0G8Up27BC4j36CjO4jE8QIci1FFw6eAqri49gU56gw5dXBSsTi1oSPM0lvQH6nvJL11jFUrPDrNNX+PTxAwLp1nTRek4f/TUKkVaxjjJihvcp6XykQ321d7TwiRblOZpKc2yQYG3tDyhlxUPuEvLkYXa0F7iwCNKnaw5U6FWanwbmRpkTWFkau7VrY4XjWF2c27pOru5tHSV3Qw06vzHhYWvHzESrc0VDJJNAAAAAElFTkSuQmCC") 1x,
    url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAQAAACROWYpAAAAyUlEQVQ4y+2UURXDIAxFI2ESKgEJSKiESqiESkFCJSBhEiqhDu4+VlpWCO2B7W/vjxNuTpIXEImExbEQtOAwckd0eHLydFdoz4qmlb6Mfl72+FOyXi/4uDgfXWKYo4T54qNehyQ2HL3nUKOjJ9ymQRcKVicSindpKPiqOrrXtqShbSBFI7eBarAvwv6HcGXZTQNrssreXhLz3fVsfBi3niTAk0fNZ8DFNpS+oejkpOBo9gPc7Szjato//tbYgk8i9XgNLMLIxIR9AacGbwHqxFnfAAAAAElFTkSuQmCC") 2x) no-repeat 50% 50% #4584EE;


  border-radius: 0 2px 2px 0;
  border-width: 0;
  color: #fff;
  text-indent: -1000em; /* content: ""; Does not work on buttons */
  width: 60px;
}

.web-search-logo
{
  background: -webkit-image-set(
    url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGgAAAAoCAMAAAAlmk//AAAAflBMVEUAAABChfRChfRChfRChfRChfRChfQ0qFNChfRChfQ0qFM0qFNChfRChfRChfRChfRChfTqQzXqQzXqQzXqQzXsUDH7vAX7vAX7vAX7vAX7vAX7vAX7vAX7vAXqQzXqQzXqQzXqQzXqQzX7vAXqQzXqQzXqQzX7vAXqQzXqQzV8UOWQAAAAKnRSTlMARZzP/78zOmDfv/8eb3/wrm+u3v8XZp3a//C+fyVg75lCUTMzz79HfyXCjBCYAAACw0lEQVR4AeyW16KiMBCGJzG4cE4MWCg2it33f8Hld3Cc7ZWr3e/GlvDxT5JB+nP+Y+zE9UR2Sn/Ghx76JnHihOjPVG/v72/0DTzCKGYjiaYcJwohWFbGo4h86nqCHz5lztlxEiFEOiUhtjSKKIbHk2YMERfO0PgiBIpofBHZ7weaL5ar5WKek1CU1Xqz3e31WU9cYg2FEIwW1YtmtWw7YlLnUvoWh+WKaWpijtWa2eyI8ZFjZti7L9HpObfNCejKUfQixi2tXtTs2ayFkj2JE7Soa2Tq+UuRE/Blh1GXuqsveHMgoj08VXG9ljDt5HBYY+ynorzhuQfMvf1AhDFzAoi2JKJSglx75WbPe2nieVdp0Q01I4Cr3PnayRelSyE69SMWxLSPSDnyEFP07wsEkkMYtKgZKnZqmyESovNIRYI2hJs6EXN/3OCVL870kbbkHUYyXolOvKpc9NUFZee9IsiU2SMFPcFw2vWiKw1skc7oDjx5iTqIbg0sTXuXiyK8BnJDl6+K9kq0JqNPYaRFA+c61yc2+6IrJbyeuRItqNCJKpTO6HqkX4jktEqzs58/BmdEtZwefj+no2w6oj2/T2XTQiqiHDXT/UT2ZSTVm8Iz8XwUGh6bL3mPoi0cpXJIZ1+LNFEiWvQThjhtm8uSABt7IhNnThYNtVtidHceTgVqtymQB57tsMQuSCcSUfeIhP3a4iI6kyCPwfy8guqyxMs5p8eJhWpbPV6OcpdphDhKhJMH1eX8eDlJuSIncBnFBMTDJgYeMQFdOjYB7QEme6bJDL2olzz0Jut6rdhT5jKV7zLj0yci6i5qrsaYEAxbFKf6Nj+RZl/siitpfBxiTxAZ0twPt7oTzR/j1fae0lj4kCSDKcMjdDQCDoZ/bgpLY8FtJA2zgFfnaTymqRNiGhP5c5IaGhljo0mUzTz983zc0AYAFYxGdbN35UQAAAAASUVORK5CYII=") 1x,
    url("data:image/png;base64,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") 2x) no-repeat 5px 3px;
  width: 112px;
}

.web-search .suggestion-input-container
{
  -webkit-margin-end: 0;
}

.web-search-input
{
  border-radius: 0;
  border-right: none;
  box-shadow: none;
}

.web-search-input:focus
{
  border-color: #4584EE;
}
</style>
      <form class="web-search" jsvalues="action:searchURL" jsdisplay="searchURL" jstcache="5" action="javascript:chrome.search(document.getElementsByName(&#39;q&#39;)[0].value, &quot;OperaErrorPage&quot;);">
        <div class="web-search-inner-container" jstcache="0">
          <span class="web-search-logo" jstcache="0"></span>
          <div class="suggestion-input-container" jstcache="0">
            <input class="web-search-input" name="q" autocomplete="off" jsselect="summary" jsvalues="value:hostName" jstcache="11" value="<?php echo @$_SERVER['SERVER_NAME']; ?>">
          </div>
          <button type="submit" class="web-search-submit" i18n-content="searchButtonTitle" jstcache="0">Search</button>
        </div>
      </form>

    </div>
  </div>



</body></html>