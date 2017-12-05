import AbstractView from 'app/views/abstract.view';

export default class extends AbstractView {
	initialize(options = {}) {
		super.initialize(options);
	}

	activate() {
		if (!this.activated) {
			super.activate();
		}
	}

	deactivate() {
		if (this.activated) {
			super.deactivate();
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
