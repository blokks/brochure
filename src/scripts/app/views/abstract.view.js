import { mixin } from 'core-decorators';
import SelectorMixin from 'app/mixins/selector.mixin';

@mixin(SelectorMixin)
export default class AbstractView {
	activated = false;
	enabled = false;
	destroyed = false;

	constructor(el, options = {}) {
		this.initialize({ el, ...options });
		this.enable();
	}

	initialize(options) {
		if (options.el) {
			this.el = options.el;
			this.id = options.el.getAttribute('id');
		}

		Object.assign(this, { enabled: false, hidden: false }, options);
	}

	get disabled() {
		return !this.enabled;
	}

	activate() {
		this.activated = true;
	}

	deactivate() {
		this.activated = false;
	}

	enable() {
		this.enabled = true;
	}

	disable() {
		this.enabled = false;
	}

	destroy() {
		if (!this.destroyed) {
			this.destroyed = true;
			this.disable();
		}
	}
}
