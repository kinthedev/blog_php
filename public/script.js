document.addEventListener("DOMContentLoaded", () => {
	const toggles = document.querySelectorAll(".menu-toggle")
	let activeMenu = null

	toggles.forEach((toggle) => {
		toggle.addEventListener("click", (e) => {
			e.stopPropagation()

			const parent = toggle.closest("div")
			const menu = parent.querySelector(".menu-box")

			if (menu === activeMenu) {
				menu.classList.add("hidden")
				activeMenu = null
				return
			}

			if (activeMenu) {
				activeMenu.classList.add("hidden")
			}

			menu.classList.remove("hidden")
			activeMenu = menu
		})
	})

	document.addEventListener("click", () => {
		if (activeMenu) {
			activeMenu.classList.add("hidden")
			activeMenu = null
		}
	})
})
