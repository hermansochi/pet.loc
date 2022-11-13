const { Then } = require('@cucumber/cucumber');
//const { expect } = require('chai');

Then('I see default laravel page', async function () {
	await this.page.waitForSelector('[data-testid=main]');
//	const text = await this.page.$eval('[data-testid=main]', el => el.innerText);

});
