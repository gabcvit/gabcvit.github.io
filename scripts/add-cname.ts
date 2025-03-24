import fs from 'fs-extra'

const DOMAIN = 'gabcvit.dev'

async function run() {
	await fs.writeFile(`./dist/CNAME`, DOMAIN, 'utf-8')
}

run()