import detectIt from 'detect-it';

import AbstractView from 'app/views/abstract.view';

export default class extends AbstractView {
	initialize(options = {}) {
		super.initialize(options);

		this.viewport = window.innerHeight;
		
		this.preview = $('#preview');
		this.player = $('#previewPlayer');
	}

	activate() {
		if (!this.activated) {
			super.activate();
			this.player.play();
		}
	}

	deactivate() {
		if (this.activated) {
			super.deactivate();
			this.player.pause();
		}
	}

	handleScroll = (event) => {
		const currentPosition = window.pageYOffset || document.documentElement.scrollTop;
		const transform = 30 - 30 * (currentPosition / (this.viewport * 1.2));

		this.preview.style.transform = `translate3d(0, ${transform}%, 0)`;
	}

	handleResize = (event) => {
		this.viewport = window.innerHeight;
	}

	enable() {
		if (this.disabled) {
			super.enable();
			window.addEventListener('scroll', this.handleScroll, detectIt.passiveEvents ? { passive: true } : false);
		}
	}

	disable() {
		if (this.enabled) {
			super.disable();
			window.removeEventListener('scroll', this.handleScroll);
		}
	}

	destroy() {
		if (!this.destroyed) {
			super.destroy();
		}
	}
}
