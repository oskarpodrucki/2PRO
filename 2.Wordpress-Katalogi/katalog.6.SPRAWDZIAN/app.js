var json = [];

// https://woocommerce.github.io/woocommerce-rest-api-docs/ <--- api Woocommerce

async function getDATA() {
	const data = await fetch(
		"http://localhost/nazwafolderuwordpressa/wp-json/wc/v3/products",
		{
			method: "GET",
			headers: {
				Authorization: `BASIC ${btoa("twojanazwawordpressa:twojehaslodowordpressa.")}`,
			},
		}
	);

	const json = await data.json();
	console.log(json);

	for (let i in json) {
		const div = document.createElement("div");
		div.setAttribute("class", "Div");

		const div_h1 = document.createElement("div");
		div_h1.setAttribute("class", "Div_h1");

		const h1_name = document.createElement("h1");
		h1_name.setAttribute("class", "h1");
		h1_name.innerHTML = json[i].name;

		const h1_price = document.createElement("h1");
		h1_price.setAttribute("class", "h1");
		h1_price.innerHTML = json[i].regular_price;

		//quantity
		const h1_ilosc = document.createElement("h1");
		h1_ilosc.setAttribute("class", "h1");
		h1_ilosc.innerHTML = json[i].stock_quantity;

		const div_change = document.createElement("div");
		div_change.setAttribute("class", "Div_change");

		const input_change = document.createElement("input");
		input_change.setAttribute("class", "input_change");
		input_change.setAttribute("placeholder", "Zmień ilość");

		const button_change = document.createElement("button");
		button_change.setAttribute("class", "button_change");
		button_change.innerHTML = "Zmień";
		button_change.addEventListener("click", () => {
			changeQuantity(json[i].id, json[i].stock_quantity, input_change.value);
		});

		div_h1.appendChild(h1_name);
		div_h1.appendChild(h1_price);
		div_h1.appendChild(h1_ilosc);

		div_change.appendChild(input_change);
		div_change.appendChild(button_change);

		div.appendChild(div_h1);
		div.appendChild(div_change);

		document.getElementById("content").appendChild(div);
	}
}

getDATA();

async function changeQuantity(id, stock_quantity, quantity) {
	console.log(id);
	console.log(stock_quantity);
	console.log(quantity);

	const log1 = parseInt(stock_quantity);
	const log2 = parseInt(quantity);

	const update_quantity = log1 + log2;
	console.log(update_quantity);

	const url = new URL(
		`http://localhost/nazwafolderuwordpressa/wp-json/wc/v3/products/${id}`
	);

	const params = {
		stock_quantity: update_quantity,
	};

	for (let i in params) {
		url.searchParams.append(i, params[i]);
	}

	console.log(url);

	const data = await fetch(url, {
		method: "POST",
		headers: {
			"Content-type": `Application/json`,
			Authorization: `BASIC ${btoa("twojanazwawordpressa:twojehaslodowordpressa.")}`,
		},
	});

	const json = await data.json();
	console.log(json);

	window.location.reload();
}

async function createProduct() {
	const nazwa = document.getElementById("name").value;
	console.log(nazwa);

	const cena = document.getElementById("price").value;
	console.log(cena);

	const quantity = parseInt(document.getElementById("ilosc").value);
	console.log(quantity);

	const params = {
		manage_stock: true,
		name: nazwa,
		regular_price: cena,
		stock_quantity: quantity,
	};

	const data = await fetch(
		"http://localhost/nazwafolderuwordpressa/wp-json/wc/v3/products",
		{
			method: "POST",
			body: JSON.stringify(params),
			headers: {
				"Content-type": `Application/json`,
				Authorization: `BASIC ${btoa("twojanazwawordpressa:twojehaslodowordpressa.")}`,
			},
		}
	);

	const json = await data.json();
	console.log(json);

	window.location.reload();
}
