window.lazySizesConfig.init = false;

import 'queryselector.js';
import 'addlistener.js';
import 'snapsvg';

import svg4everybody from 'svg4everybody';
import lazySizes from 'lazysizes';
import Router from 'app/router';

window.on('load', () => {
	Router.initialize();
	lazySizes.init();
});