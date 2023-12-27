/*
 * jquery-auto-height.js
 *
 * Copyright (c) 2010 Tomohiro Okuwaki (http://www.tinybeans.net/blog/)
 * Licensed under MIT Lisence:
 * http://www.opensource.org/licenses/mit-license.php
 * http://sourceforge.jp/projects/opensource/wiki/licenses%2FMIT_license
 *
 * Since:   2010-04-19
 * Update:  2013-08-16
 * version: 0.04
 * Comment:
 *
 * jQuery 1.2 <-> 1.10.2
 *
 */

 (function($){
    $.fn.autoHeight = function(options){
        var op = $.extend({

            column  : 0,
            clear   : 0,
            height  : 'minHeight',
            reset   : '',
            descend : function descend (a,b){ return b-a; }

        },options || {}); // options縺ｫ蛟､縺後≠繧後�荳頑嶌縺阪☆繧�

        var self = $(this);
        var n = 0,
            hMax,
            hList = new Array(),
            hListLine = new Array();
            hListLine[n] = 0;

        // 隕∫ｴ�縺ｮ鬮倥＆繧貞叙蠕�
        self.each(function(i){
            if (op.reset == 'reset') {
                $(this).removeAttr('style');
            }
            var h = $(this).height();
            hList[i] = h;
            if (op.column > 1) {
                // op.column縺斐→縺ｮ譛螟ｧ蛟､繧呈�ｼ邏阪＠縺ｦ縺�￥
                if (h > hListLine[n]) {
                    hListLine[n] = h;
                }
                if ( (i > 0) && (((i+1) % op.column) == 0) ) {
                    n++;
                    hListLine[n] = 0;
                };
            }
        });

        // 蜿門ｾ励＠縺滄ｫ倥＆縺ｮ謨ｰ蛟､繧帝剄鬆�↓荳ｦ縺ｹ譖ｿ縺�
        hList = hList.sort(op.descend);
        hMax = hList[0];

        // 鬮倥＆縺ｮ譛螟ｧ蛟､繧定ｦ∫ｴ�縺ｫ驕ｩ逕ｨ
        var ie6 = typeof window.addEventListener == "undefined" && typeof document.documentElement.style.maxHeight == "undefined";
        if (op.column > 1) {
            for (var j=0; j<hListLine.length; j++) {
                for (var k=0; k<op.column; k++) {
                    if (ie6) {
                        self.eq(j*op.column+k).height(hListLine[j]);
                    } else {
                        self.eq(j*op.column+k).css(op.height,hListLine[j]);
                    }
                    if (k == 0 && op.clear != 0) {
                        self.eq(j*op.column+k).css('clear','both');
                    }
                }
            }
        } else {
            if (ie6) {
                self.height(hMax);
            } else {
                self.css(op.height,hMax);
            }
        }
    };
})(jQuery);
