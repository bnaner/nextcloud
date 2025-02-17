import {
	translate as t,
	// translatePlural as n,
} from '@nextcloud/l10n'
import { loadState } from '@nextcloud/initial-state'

function renderWidget(el) {

}

setInterval(function() { window.location.reload() }, 30000)

document.addEventListener('DOMContentLoaded', () => {
	OCA.Dashboard.register('clockdashboard-simple-widget', (el, { widget }) => {
		renderWidget(el)
	})
})
