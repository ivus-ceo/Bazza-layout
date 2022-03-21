window.addEventListener('load', () => {
	const menuBtn = document.querySelector('.navbar__menu');
	menuBtn.addEventListener('click', () => {
		toggleSidebar();
	});

	window.addEventListener('resize', (e) => {
		if (window.innerWidth >= 768) {
			toggleSidebar(true);
		}
	});

	function toggleSidebar(isDesktop) {
		const body = document.querySelector('body');
		const rightColumn = document.querySelector('.main__right-column');

		if (isDesktop) {
			body.classList.remove('active-sidebar');
			rightColumn.classList.remove('active');
		} else {
			body.classList.toggle('active-sidebar');
			rightColumn.classList.toggle('active');
		}
	}
});
