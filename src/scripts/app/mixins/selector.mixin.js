import 'queryselector.js';

const SelectorMixin = {
	$(selector) {
		if (!this.el) {
			console.warn('View requires an element to query for children');
			return null;
		}

		return this.el.$(selector);
	},
};

export default SelectorMixin;
