import AbstractView from 'app/views/abstract.view';

export default class extends AbstractView {
	initialize(options = {}) {
		super.initialize(options);

		this.player = this.$('.how-it-works__player');
		this.player.playbackRate = 1.5;
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

	destroy() {
		if (!this.destroyed) {
			super.destroy();
			this.player = null;
		}
	}
}
