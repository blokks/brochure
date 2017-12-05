import AbstractView from 'app/views/abstract.view';

export default class extends AbstractView {
	initialize(options = {}) {
		super.initialize(options);
		this.player = this.$('.feature__player');
	}

	activate() {
		if (!this.activated) {
			super.activate();
			console.log('play');
			this.player.play();
		}
	}

	deactivate() {
		if (this.activated) {
			super.deactivate();
			console.log('pause');
			this.player.pause();
		}
	}

	enable() {
		if (this.disabled) {
			super.enable();
		}
	}

	destroy() {
		if (!this.destroyed) {
			super.destroy();
		}
	}
}
