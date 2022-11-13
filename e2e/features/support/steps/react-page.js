const { When } = require('@cucumber/cucumber');

When('I open {string} page in react project', { wrapperOptions: { retry:2 }, timeout: 30000 }, async function (uri) {
	return await this.page.goto('http://react.localhost' + uri);
});