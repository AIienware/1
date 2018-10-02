<?php
/**
 * Locale
 *
 * @version    0.2 (2018-09-01 01:57:00 GMT)
 * @author     Mr. CLEAN <admin@spamstore.ga>
 * @copyright  2018 Mr. CLEAN
 * @license    Apache License, Version 2.0
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      <http://www.apache.org/licenses/LICENSE-2.0>
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace mrclean\locale;

class locale {

  /**
   * Version
   * @var string
   */
  const VERSION = '0.2';

  #===================================================================

  public static function country2locale($code) {
    # http://wiki.openstreetmap.org/wiki/Nominatim/Country_Codes
    $arr = array(
      'ad' => 'ca',
      'ae' => 'ar',
      'af' => 'fa',
      'ag' => 'en',
      'ai' => 'en',
      'al' => 'sq',
      'am' => 'hy',
      'an' => 'nl',
      'ao' => 'pt',
      'aq' => 'en',
      'ar' => 'es',
      'as' => 'en',
      'at' => 'de',
      'au' => 'en',
      'aw' => 'nl',
      'ax' => 'sv',
      'az' => 'az',
      'ba' => 'bs',
      'bb' => 'en',
      'bd' => 'bn',
      'be' => 'nl',
      'bf' => 'fr',
      'bg' => 'bg',
      'bh' => 'ar',
      'bi' => 'fr',
      'bj' => 'fr',
      'bl' => 'fr',
      'bm' => 'en',
      'bn' => 'ms',
      'bo' => 'es',
      'br' => 'pt',
      'bq' => 'nl',
      'bs' => 'en',
      'bt' => 'dz',
      'bv' => 'no',
      'bw' => 'en',
      'by' => 'be',
      'bz' => 'en',
      'ca' => 'en',
      'cc' => 'en',
      'cd' => 'fr',
      'cf' => 'fr',
      'cg' => 'fr',
      'ch' => 'de',
      'ci' => 'fr',
      'ck' => 'en',
      'cl' => 'es',
      'cm' => 'fr',
      'cn' => 'zh',
      'co' => 'es',
      'cr' => 'es',
      'cu' => 'es',
      'cv' => 'pt',
      'cw' => 'nl',
      'cx' => 'en',
      'cy' => 'el',
      'cz' => 'cs',
      'de' => 'de',
      'dj' => 'fr',
      'dk' => 'da',
      'dm' => 'en',
      'do' => 'es',
      'dz' => 'ar',
      'ec' => 'es',
      'ee' => 'et',
      'eg' => 'ar',
      'eh' => 'ar',
      'er' => 'ti',
      'es' => 'es',
      'et' => 'am',
      'fi' => 'fi',
      'fj' => 'en',
      'fk' => 'en',
      'fm' => 'en',
      'fo' => 'fo',
      'fr' => 'fr',
      'ga' => 'fr',
      'gb' => 'en',
      'gd' => 'en',
      'ge' => 'ka',
      'gf' => 'fr',
      'gg' => 'en',
      'gh' => 'en',
      'gi' => 'en',
      'gl' => 'kl',
      'gm' => 'en',
      'gn' => 'fr',
      'gp' => 'fr',
      'gq' => 'es',
      'gr' => 'el',
      'gs' => 'en',
      'gt' => 'es',
      'gu' => 'en',
      'gw' => 'pt',
      'gy' => 'en',
      'hk' => 'zh',
      'hm' => 'en',
      'hn' => 'es',
      'hr' => 'hr',
      'ht' => 'fr',
      'hu' => 'hu',
      'id' => 'id',
      'ie' => 'en',
      'il' => 'he',
      'im' => 'en',
      'in' => 'hi',
      'io' => 'en',
      'iq' => 'ar',
      'ir' => 'fa',
      'is' => 'is',
      'it' => 'it',
      'je' => 'en',
      'jm' => 'en',
      'jo' => 'ar',
      'jp' => 'ja',
      'ke' => 'sw',
      'kg' => 'ky',
      'kh' => 'km',
      'ki' => 'en',
      'km' => 'ar',
      'kn' => 'en',
      'kp' => 'ko',
      'kr' => 'ko',
      'kw' => 'ar',
      'ky' => 'en',
      'kz' => 'kk',
      'la' => 'lo',
      'lb' => 'ar',
      'lc' => 'en',
      'li' => 'de',
      'lk' => 'si',
      'lr' => 'en',
      'ls' => 'en',
      'lt' => 'lt',
      'lu' => 'lb',
      'lv' => 'lv',
      'ly' => 'ar',
      'ma' => 'ar',
      'mc' => 'fr',
      'md' => 'ru',
      'me' => 'srp',
      'mf' => 'fr',
      'mg' => 'mg',
      'mh' => 'en',
      'mk' => 'mk',
      'ml' => 'fr',
      'mm' => 'my',
      'mn' => 'mn',
      'mo' => 'zh',
      'mp' => 'ch',
      'mq' => 'fr',
      'mr' => 'ar',
      'ms' => 'en',
      'mt' => 'mt',
      'mu' => 'mfe',
      'mv' => 'dv',
      'mw' => 'en',
      'mx' => 'es',
      'my' => 'ms',
      'mz' => 'pt',
      'na' => 'en',
      'nc' => 'fr',
      'ne' => 'fr',
      'nf' => 'en',
      'ng' => 'en',
      'ni' => 'es',
      'nl' => 'nl',
      'no' => 'nb',
      'np' => 'ne',
      'nr' => 'na',
      'nu' => 'niu',
      'nz' => 'en',
      'om' => 'ar',
      'pa' => 'es',
      'pe' => 'es',
      'pf' => 'fr',
      'pg' => 'en',
      'ph' => 'en',
      'pk' => 'en',
      'pl' => 'pl',
      'pm' => 'fr',
      'pn' => 'en',
      'pr' => 'es',
      'ps' => 'ar',
      'pt' => 'pt',
      'pw' => 'en',
      'py' => 'es',
      'qa' => 'ar',
      're' => 'fr',
      'ro' => 'ro',
      'rs' => 'sr',
      'ru' => 'ru',
      'rw' => 'rw',
      'sa' => 'ar',
      'sb' => 'en',
      'sc' => 'fr',
      'sd' => 'ar',
      'se' => 'sv',
      'sg' => 'en',
      'sh' => 'en',
      'si' => 'sl',
      'sj' => 'no',
      'sk' => 'sk',
      'sl' => 'en',
      'sm' => 'it',
      'sn' => 'fr',
      'so' => 'so',
      'sr' => 'nl',
      'st' => 'pt',
      'ss' => 'en',
      'sv' => 'es',
      'sx' => 'nl',
      'sy' => 'ar',
      'sz' => 'en',
      'tc' => 'en',
      'td' => 'fr',
      'tf' => 'fr',
      'tg' => 'fr',
      'th' => 'th',
      'tj' => 'tg',
      'tk' => 'tkl',
      'tl' => 'pt',
      'tm' => 'tk',
      'tn' => 'ar',
      'to' => 'en',
      'tr' => 'tr',
      'tt' => 'en',
      'tv' => 'en',
      'tw' => 'zh',
      'tz' => 'sw',
      'ua' => 'uk',
      'ug' => 'en',
      'um' => 'en',
      'us' => 'en',
      'uy' => 'es',
      'uz' => 'uz',
      'va' => 'it',
      'vc' => 'en',
      've' => 'es',
      'vg' => 'en',
      'vi' => 'en',
      'vn' => 'vi',
      'vu' => 'bi',
      'wf' => 'fr',
      'ws' => 'sm',
      'ye' => 'ar',
      'yt' => 'fr',
      'za' => 'zu',
      'zm' => 'en',
      'zw' => 'en'
    );
    #----
    $code = strtolower($code);
    if ($code == 'eu') {
      return 'en';
    }
    elseif ($code == 'ap') { # Asia Pacific
      return 'en';
    }
    elseif ($code == 'cs') {
       return 'sr';
    }
    #----
    if ($code == 'uk') {
      $code = 'gb';
    }
    if (array_key_exists($code, $arr)) {
      if (strpos($arr[$code], ',') !== false) {
        $new = explode(',', $arr[$code]);
        $loc = array();
        foreach ($new as $key => $val) {
          $loc[] = $val.'_'.strtoupper($code);
        }
        return implode(',', $loc); # string; comma-separated values 'en_GB,ga_GB,cy_GB,gd_GB,kw_GB'
      }
      else {
        return $arr[$code]; # string 'en'
      }
    }
    return 'en';
  }

  #===================================================================
}