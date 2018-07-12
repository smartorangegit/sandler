
// add dots for long headind
function dots() {
	var element = document.querySelectorAll(".news-list__heading");
	element.forEach(function(item, i) {
		var textLength = item.innerHTML.length;
		if(textLength > 28) {
			item.classList.add("news-list__heading_dots");
		} else {
			item.classList.remove("news-list__heading_dots");
		}
	});
};
dots();
// end__add dots for long headind

