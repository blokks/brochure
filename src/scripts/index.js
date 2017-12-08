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







// import { Howl } from 'howler';

// let lastPosition = 0;
// let lastTimeStamp = 0;


// var sound = new Howl({
//       src: ['http://blokks.dev/brochure/dist/sound.mp3']
// });


// sound.once('load', () => {
// 	console.log(sound);
// 	console.log(sound.duration());
// });

// sound.play();


// document.querySelector('main').style.height = `${254 * 100}px`;

// // 1 - 10 = 10 
// // rate = 10 / 10 = 1

// // 1 - 10 = 5
// // rate = 10 / 5 = 2

// // 1 - 10 = 2
// // rate 10 / 2 = 5







// var throttle = require('lodash.throttle');

// const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;



// const tmp = 10; // 1 sec = 50px = rate 1


// const throttledHandler = throttle(event => {
// 	const currentTimeStamp = event.timeStamp;
// 	const currentPosition = window.pageYOffset || document.documentElement.scrollTop;

// 	if (lastTimeStamp !== 0) {
// 		let time = currentTimeStamp - lastTimeStamp;
// 		let distance = currentPosition - lastPosition;

// 		// const scrollPosition = Math.min(currentPosition / scrollHeight, 1);
// 		// const playback = scrollPosition * sound.duration() * 1000;

// 		// const rate = (playback - sound.seek() * 1000) / timeStamp;

// 		// console.log(scrollPosition, playback);
// 		let rate = distance / 200;
// 		rate = Math.max(1, rate);
// 		rate = Math.min(4, rate);

// 		// console.log(distance, rate);
// 		sound.rate(rate);
// 		console.log(rate);
// 		// sound.seek()
// 	}

// 	lastPosition = currentPosition;
// 	lastTimeStamp = currentTimeStamp;
// }, 100);

// window.on('scroll', throttledHandler);