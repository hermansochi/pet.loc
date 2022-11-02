const { setWorldConstructor } = require('@cucumber/cucumber');

function CustomWorld() {
	this.browser = null;
	this.page = null;
}

setWorldConstructor(CustomWorld);
