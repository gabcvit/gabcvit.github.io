export type Project = {
	title: string
  theme: string
  roles: string
  link: string
  period: string
}

export type Portfolio = Project[]

export const portfolio: Portfolio = [
	{
		title: 'gabcvit/birth-chart',
		theme:  'Personal project',
		roles: 'Main developer',
		link: 'https://github.com/gabcvit/birth-chart',
		period: '2025',
	},
  {
		title: 'Pronto! Cidadania Italiana',
		theme:  'Forwarding agency',
		roles: 'Website development and maintenance',
		link: 'https://prontocidadaniaitaliana.com.br/',
		period: '2022',
	},
  {
		title: 'gabcvit/find-my-btc-wallet',
		theme:  'Personal project',
		roles: 'Main developer',
		link: 'https://github.com/gabcvit/find-my-btc-wallet',
		period: '2021',
	},
  {
    title: `Skiresort`,
    theme: 'Skiresort and weather app',
    roles: 'Developer and UI designer - while working at app-affairs GmbH.',
    link: 'https://www.skiresort.de/app/',
    period: '2021',
  },
  {
		title: 'Pellegrini Traduções',
		theme:  'Forwarding agency',
		roles: 'Website development and maintenance',
		link: 'https://pellegrinitraducoes.com.br',
		period: '2020',
	},
  {
    title: `Hot Dog Hunt AR`,
    theme: 'Party mobile game with Augmented Reality (AR)',
    roles: 'Developer, UI designer and level designing - while working at app-affairs GmbH.',
    link: 'https://hotdoghunt.com/',
    period: '2020',
  },
  {
    title: `DINGS - DopINg für die GrundSchule`,
    theme: 'Educational endless runner game for kids',
    roles: 'Developer, QA and UI designer - while working at app-affairs GmbH.',
    link: 'https://dings.app-affairs.com/',
    period: '2020',
  },
  {
    title: `Company's' landing page`,
    theme: 'Webpage redesign for IT consultancy',
    roles: 'Main developer and designer - while working at app-affairs GmbH.',
    link: 'https://app-affairs.de',
    period: '2019',
  },
  {
    title: `Kaleezy`,
    theme: 'Native iOS app for tracking goals',
    roles: 'Developer and UI designer - while working at app-affairs GmbH.',
    link: 'https://apps.apple.com/us/app/kaleezy/id1316476796',
    period: '2019',
  },
  {
    title: `Keeta - The app to keep track`,
    theme: 'Ionic app for tracking shared lists',
    roles: 'Developer and UI designer - while working at app-affairs GmbH.',
    link: 'https://apps.apple.com/us/app/keeta-the-app-to-keep-track/id1211707369',
    period: '2018',
  },
  {
		title: 'Rovigatti',
		theme:  'Health clinic',
		roles: 'Main developer and designer',
		link: 'http://rovigatti.com.br',
		period: '2015',
	},
]