const categories = ['grain', 'flowers', 'cash']; // Add more as needed

const categoryContainer = document.getElementById('cropCategories');
const itemContainer = document.getElementById('cropItems');
const detailContainer = document.getElementById('cropDetails');

// Render category cards
categories.forEach(category => {
  const card = document.createElement('div');
  card.className = 'category-card';
  card.innerHTML = `
    <h2>${capitalize(category)} Crops</h2>
    <img src="assets/images/crops/${category}/${category}.jpeg" alt="${category}">
  `;
  card.addEventListener('click', () => loadCategoryData(category));
  categoryContainer.appendChild(card);
});

// Load JSON file for selected category
function loadCategoryData(category) {
  fetch(`assets/data/${category}.json`)
    .then(res => res.json())
    .then(data => showCropItems(category, data))
    .catch(err => console.error(`Error loading ${category}.json`, err));
}

// Show crop items in selected category
function showCropItems(category, items) {
  categoryContainer.style.display = 'none';
  itemContainer.style.display = 'flex';
  detailContainer.style.display = 'none';
  itemContainer.innerHTML = `<h2>${capitalize(category)} Crops</h2>`;

  items.forEach(item => {
    const cropCard = document.createElement('div');
    cropCard.className = 'crop-card';
    cropCard.innerHTML = `
      <img src="${item.image}" alt="${item.name}">
      <h3>${item.name}</h3>
      <p>${item.description || item.overview || ''}</p>
    `;
    cropCard.addEventListener('click', () => showCropDetails(item));
    itemContainer.appendChild(cropCard);
  });

  const backBtn = createBackButton(() => {
    itemContainer.style.display = 'none';
    categoryContainer.style.display = 'flex';
  });
  itemContainer.appendChild(backBtn);
}

// Show detailed info for a crop item
function showCropDetails(item) {
  itemContainer.style.display = 'none';
  detailContainer.style.display = 'block';

  detailContainer.innerHTML = `
    <h2>${item.name}</h2>
    <img src="${item.image}" alt="${item.name}" class="detail-image">
    ${item.overview ? `<p><strong>Overview:</strong> ${item.overview}</p>` : ''}
    ${item.description ? `<p><strong>Description:</strong> ${item.description}</p>` : ''}
    ${item.growth ? `<p><strong>Growth:</strong> ${item.growth}</p>` : ''}
    ${item.season ? `<p><strong>Season:</strong> ${item.season}</p>` : ''}
    ${item.uses ? `<p><strong>Uses:</strong> ${item.uses}</p>` : ''}
    ${item.benefits ? `<p><strong>Benefits:</strong> ${item.benefits}</p>` : ''}
  `;

  const backBtn = createBackButton(() => {
    detailContainer.style.display = 'none';
    itemContainer.style.display = 'flex';
  });
  detailContainer.appendChild(backBtn);
}

// Utility: Capitalize first letter
function capitalize(str) {
  return str.charAt(0).toUpperCase() + str.slice(1);
}

// Utility: Create back button
function createBackButton(callback) {
  const btn = document.createElement('button');
  btn.textContent = '← Back';
  btn.className = 'back-btn';
  btn.onclick = callback;
  return btn;
}
