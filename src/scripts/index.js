window.lazySizesConfig.init = false;

import 'queryselector.js';
import 'addlistener.js';

import svg4everybody from 'svg4everybody';
import lazySizes from 'lazysizes';
import Router from 'app/router';

window.on('load', () => {
	Router.initialize();
	lazySizes.init();
});







// import { Howl } from 'howler';

// let lastPosition = 0;
// let lastTimeStamp = 0;


// var sound = new Howl({
//       src: ['http://blokks.dev/brochure/dist/sound.mp3']
// });


// sound.once('load', () => {
// 	console.log(sound)
// });

// // sound.play();


// const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;

// window.on('scroll', event => {
// 	const currentTimeStamp = event.timeStamp;
// 	const currentPosition = window.pageYOffset || document.documentElement.scrollTop;

// 	if (lastTimeStamp !== 0) {
// 		let distance = currentPosition - lastPosition;

// 		console.log(currentPosition / scrollHeight);
// 		// / / (currentTimeStamp - lastTimeStamp);
// 		// console.log(distance);
// 		// let rate = speed * 0.5 + 1;

// 		// sound.rate(rate);
// 	}

// 	lastPosition = currentPosition;
// 	lastTimeStamp = currentTimeStamp;
// });