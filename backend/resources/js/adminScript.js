const addModal = document.querySelector('#addFood')
const editModal = document.querySelector('#editFood')
const openModal = document.querySelectorAll('.open-modal')
const closeModal = document.querySelectorAll('.close-modal')

openModal.forEach(btns => {
btns.addEventListener('click', () => {
	if(btns.getAttribute('aria-controls') === 'edit-food'){
		editModal.showModal()
	}
	else if(btns.getAttribute('aria-controls') === 'add-food'){
		addModal.showModal()
	}
})
})
closeModal.forEach(btns => {
	btns.addEventListener('click', () => {
		if(btns.getAttribute('aria-controls') === 'edit-food'){
			editModal.close()
		}
		else if(btns.getAttribute('aria-controls') === 'add-food'){
			addModal.close()
		}
	})
})

const tabs = document.querySelectorAll('[role="tab"]');
tabs.forEach((tab) => {
    tab.addEventListener("click", function () {
        tabs.forEach((tab) => {
            tab.classList.remove("active-admin");
        });
        tab.classList.add("active-admin");
        
    });
});




document.getElementById('order').addEventListener('submit', async (event) => {
   
	const response = await fetch('/api/addMenu', {
		method: 'POST',
		headers: {
			'Content-Type': 'application/json',
			'Authorization': `Bearer ${window.token}` 
		},
		body: JSON.stringify({
			food_name: document.getElementById('food_name').value,
			price: document.getElementById('price').value
		})
	});});
