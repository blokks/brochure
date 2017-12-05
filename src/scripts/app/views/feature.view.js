import AbstractView from 'app/views/abstract.view';

export default class extends AbstractView {
	initialize(options = {}) {
		super.initialize(options);
		this.player = this.$('.feature__player');
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
