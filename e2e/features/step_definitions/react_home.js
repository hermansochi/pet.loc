const { Given, When, Then } = require('@cucumber/cucumber');
const { expect } = require('chai');

When('I open home page', { wrapperOptions: { retry:2 }, timeout: 30000 }, async function () {
	return await this.page.goto('http://react.localhost');
});

Then('I see ...', async function () {
	// Write code here that turns the phrase above into concrete actions
	return 'pending';
});



