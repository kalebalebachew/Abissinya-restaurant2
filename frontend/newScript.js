let downArrow = document.querySelectorAll('.down-arrow');
downArrow.forEach(arrow => {
    arrow.addEventListener('click', function(){
        let parent = this.parentNode
        let currentMenu = parent.nextElementSibling
        if (currentMenu) {
            currentMenu.classList.toggle('invisible');
          } else {
            alert("No menu element found for this down arrow");
          }
    })
});

