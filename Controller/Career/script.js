const currentUrl = window.location.pathname + window.location.search;

if (currentUrl == '/wp-admin/post-new.php?post_type=career') {
    const newCareerLabel = document.querySelector('.wp-heading-inline').textContent = "Add New Career (This \"Title\" only for Admin reference)";
    newCareerLabel.textContent;
}
