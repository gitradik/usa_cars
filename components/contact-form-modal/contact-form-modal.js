function onClickContactFormModal(title, titleId, location, locationId) {
    document.getElementById(locationId).value = location;
    document.getElementById(titleId).innerText = title;
}