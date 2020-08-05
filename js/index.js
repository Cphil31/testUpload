function supprimer(evt, id_file) {
	evt.stopPropagation();
	if (confirm("Vraiment supprimer ?")) {
		let url = `supprimer.php?id_file=${id_file}`;
		fetch(url)
						.then(response => {
							if (response.ok)
								location.reload();
						})
						.catch(error => console.error(error));
	}
}