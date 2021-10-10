;
(function () {

	"use strict";


	const main = document.querySelector('.main');
	const goods = document.querySelector('.app__form-goods');
	const submit = document.querySelector('.app__form-btn');
	

	function addCart(e) {
		const items = document.querySelector('.cart__items');
		const total = document.querySelector('.cart__total');
		const totalWithDiscount = document.querySelectorAll('.cart__total-discount');
		const error = document.querySelector('.cart__error');			
		let sum = 0	
		let sumOld = 0	

		const cartDiscount = document.querySelector('.cart__discount');

		
		if (e.target.classList.contains('btn-checkbox__control')) {

			if (e.target.checked) {
				const item = document.createElement('div')
				item.classList.add('cart__item')

				const itemName = document.createElement('div')
				itemName.classList.add('cart__item-name')
				itemName.textContent = e.target.value

				const itemPrice = document.createElement('div')
				itemPrice.classList.add('cart__item-price')
				itemPrice.textContent = `${e.target.dataset.price} ₽`				

				const itemPriceOld = document.createElement('span')
				itemPriceOld.classList.add('cart__item-price-old')
				itemPriceOld.style.display = "none"
				itemPriceOld.textContent = `${e.target.dataset.oldPrice}`

				item.appendChild(itemName)
				item.appendChild(itemPrice)
				item.appendChild(itemPriceOld)
				items.appendChild(item)				

				const itemsPrice = document.querySelectorAll('.cart__item-price')
				itemsPrice.forEach(el => {
					sum += parseInt(el.textContent)										
				})

				const itemsPriceOld = document.querySelectorAll('.cart__item-price-old')
				itemsPriceOld.forEach(el => {
					sumOld += parseInt(el.textContent)										
				})

				totalWithDiscount.forEach(el => el.innerHTML = `${sum} ₽`)
				cartDiscount.textContent = `${100 - ((sum * 100) / sumOld)}%`
				
				let inputGoods = document.createElement('input')
				inputGoods.classList.add('app__form-good')
				inputGoods.type = "checkbox"
				inputGoods.value = e.target.dataset.value
				inputGoods.name = 'formParams[offer_id][]'
				inputGoods.dataset.priceValue = e.target.dataset.price
				inputGoods.dataset.oldPriceValue = e.target.dataset.oldPrice
				inputGoods.dataset.priceCurrency = 'руб.'
				inputGoods.dataset.qtyValue = '1'
				inputGoods.dataset.title = e.target.value
				inputGoods.id = e.target.dataset.id
				inputGoods.checked = true

				let inputGoodsHidden = document.createElement('input')
				inputGoods.classList.add('app__form-good-hidden')
				inputGoodsHidden.type = "hidden"
				inputGoodsHidden.name = 'formParams[need_offer]'
				inputGoodsHidden.id = e.target.dataset.id
				//inputGoodsHidden.value = e.target.value

				goods.appendChild(inputGoodsHidden)
				goods.appendChild(inputGoods)


				if (sum > 0) {		
					error.style.display = 'none'				
					total.innerHTML = `${sumOld}`
					cartDiscount.textContent = `${100 - ((sum * 100) / sumOld)}%`
					submit.removeAttribute('disabled')
				}
				else {						
					error.style.display = 'block'
					total.innerHTML = ''
					cartDiscount.textContent = `${100 - ((sum * 100) / sumOld)}%`
					submit.setAttribute("disabled", "");
				}

			} else {
				const name = document.querySelectorAll('.cart__item-name')
				name.forEach(el => {
					if (el.textContent === e.target.value) {
						el.closest('.cart__item').remove()
					}					
				})

				const goodsName = document.querySelectorAll('.app__form-good')
				goodsName.forEach(el => {
					if (el.dataset.title === e.target.value) {
						el.remove()
					}					
				})

				const goodsNameHidden = document.querySelectorAll('.app__form-good-hidden')
				goodsNameHidden.forEach(el => {
					if (el.value === e.target.value) {
						el.remove()
					}					
				})

				const itemsPrice = document.querySelectorAll('.cart__item-price')
				itemsPrice.forEach(el => {
					sum += parseInt(el.textContent)		
				})
				totalWithDiscount.forEach(el => el.innerHTML = `${sum} ₽`)

				const itemsPriceOld = document.querySelectorAll('.cart__item-price-old')
				itemsPriceOld.forEach(el => {
					sumOld += parseInt(el.textContent)										
				})


				if(sum > 0){
					error.style.display = 'none'
					total.innerHTML = `${sumOld}`
					cartDiscount.textContent = `${100 - ((sum * 100) / sumOld)}%`
					submit.removeAttribute('disabled')
					
				}
				else {						
					error.style.display = 'block'
					total.innerHTML = ''
					cartDiscount.textContent = `${100 - ((sum * 100) / sumOld)}%`
					submit.setAttribute("disabled", "");			
				}				
			}
		}
	}

	main.addEventListener('change', (e) => {
		addCart(e)
	})


})();