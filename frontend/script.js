const axios = require('axios')


//-------------------Admin Requests--------------------------
axios.get('api/index')
.then(response =>{

  index = response.data

  
})
const loginForm = document.getElementById('')
axios.post('/api/login')
.then(response =>{

})
const updateForm = document.getElementById('')
axios.put('/update/menu/{id}')
.then(response =>{

})


const addForm = document.getElementById('')
const newMenuItem = {
  food_name: foodName,
  price: price,
}
axios.post('/add-menus',newMenuItem)
.then(response =>{

})

//----------------------------------------------------




//-------------------- User Requests -------------------------------------------------

const form = document.getElementById('')
const order = {
  food_name: foodName,
  quantity: quantity,
  name: Name,
  phone_number: phoneNumber,
  day: day,

}
axios.post('/api/orders/place', order)
.then(response =>{
  alert('Order created successfully')
})



const reserve = document.getElementById('')
axios.post('api/reserve')
.then(response =>{

})




