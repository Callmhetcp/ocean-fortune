
const cryptoList = [
    {
      id: '1',
      symbol: 'BTC',
      name: 'Bitcoin',
      imageUrl: 'https://s2.coinmarketcap.com/static/img/coins/64x64/1.png',
      data_value: 'BTC'
    },
    {
      id: '2',
      symbol: 'USDT',
      name: 'Tether',
      imageUrl: 'https://s2.coinmarketcap.com/static/img/coins/64x64/825.png',
      data_value: 'USDT'
    },
    {
      id: '3', 
      symbol: 'ETH',
      name: 'Ethereum',
      imageUrl: 'https://s2.coinmarketcap.com/static/img/coins/64x64/1027.png',
      data_value: 'ETH'
    },
    {
      id: '5',
      symbol: 'DOGE',
      name: 'Dogecoin',
      imageUrl: 'https://s2.coinmarketcap.com/static/img/coins/64x64/74.png',
      data_value: 'DOGE'
    },
    {
      id: '6',
      symbol: 'BNB',
      name: 'Binance Coin',
      imageUrl: 'https://s2.coinmarketcap.com/static/img/coins/64x64/1839.png',
      data_value: 'BNB'
    },
    {
      id: '8',
      symbol: 'SHIB',
      name: 'Shiba Inu',
      imageUrl: 'https://s2.coinmarketcap.com/static/img/coins/64x64/5994.png',
      data_value: 'SHIB'
    },
    {
      id: '9',
      symbol: 'LTC',
      name: 'Litecoin',
      imageUrl: 'https://s2.coinmarketcap.com/static/img/coins/64x64/2.png',
      data_value: 'LTC'

    },
    {
      id: '10',
      symbol: 'XRP',
      name: 'Ripple',
      imageUrl: 'https://s2.coinmarketcap.com/static/img/coins/64x64/52.png',
      data_value: 'XRP'

    }
  ];


  const COINS = {
    BTC: 'bitcoin',
    ETH: 'ethereum',
    USDT: 'tether',
    BNB: 'binancecoin',
    SOL: 'solana',
    DOGE: 'dogecoin',      
    SHIB: 'shiba-inu',    
    LTC: 'litecoin',     
    XRP: 'ripple'        
};



async function fetchPrices() {
  const ids = Object.values(COINS).join(',');
  try {
      const response = await fetch(
          `https://api.coingecko.com/api/v3/simple/price?ids=${ids}&vs_currencies=usd`
      );
      return await response.json();
  } catch (error) {
      console.error('Error fetching prices:', error);
      return null;
  }
}
let button;
  
  function initializeDropdowns() {
    const dropdowns = document.querySelectorAll('.crypto-select');
  
    dropdowns.forEach((dropdown) => {
      let button = dropdown.querySelector('.select-btn');
      const menu = document.createElement('div');
      menu.className = 'dropdown-menu';
      const dropdownHeader = document.createElement('div');
      dropdownHeader.className = 'dropdown-header';
      dropdownHeader.innerHTML = 'Select Currency';
      menu.appendChild(dropdownHeader);
      dropdown.appendChild(menu);

  
      cryptoList.forEach((crypto) => {
        const item = createDropdownItem(crypto);
        menu.appendChild(item);
  
        item.addEventListener('click', () => {
          updateSelection(button, crypto);
          menu.classList.remove('show');
        });
      });
  
      button.addEventListener('click', (e) => {
        e.stopPropagation();
        menu.classList.toggle('show');
  
        dropdowns.forEach((other) => {
          if (other !== dropdown) {
            other.querySelector('.dropdown-menu').classList.remove('show');
          }
        });
      });
    });
  
    document.addEventListener('click', () => {
      document.querySelectorAll('.dropdown-menu').forEach((menu) => {
        menu.classList.remove('show');
      });
    });
  }
  
  function createDropdownItem(crypto) {
    console.log(crypto.data_value)
    const item = document.createElement('div');
    item.className = 'dropdown-item';
    item.innerHTML = `
      <span class="crypto-option">
        <img src="${crypto.imageUrl}" alt="${crypto.symbol}" />
        <option class="crypto-name_and_symbol_wrapper">
          <span class="crypto-text">${crypto.symbol}</span>
          <span class="crypto-name">${crypto.name}</span>
        </option>
      </span>
    `;
    
    return item;

  }
  
  function updateSelection(button, crypto) {
    // button = dropdown.querySelector('.select-btn');
    button.innerHTML = `
      <img src="${crypto.imageUrl}" alt="${crypto.symbol}" />
      <p data-value="${crypto.data_value}" >${crypto.symbol}</p>
    `;
    button.dataset.cryptoId = crypto.id;
  }
  
  
document.getElementById(`exchange-btn`).addEventListener(`click`, async () => {
  
  const errorMessage = document.querySelector(`#error`);
  let selectBtn1 = document.querySelector(`.select-btn1`);
  let selectBtn2 = document.querySelector(`.select-btn2`);

  if(selectBtn1.querySelector('p')){
    let ptag1 = selectBtn1.querySelector('p');
    let ptag2 = selectBtn2.querySelector('p');
    let dataValue2 = ptag2.getAttribute('data-value');
    let dataValue1 = ptag1.getAttribute('data-value');

    const inputAmount = Number(document.querySelector(`#input-amount`).value);

    const prices = await fetchPrices();
    if(!inputAmount || inputAmount <= 0) {
      errorMessage.style.display = `block`;
      errorMessage.textContent = "Please enter a valid amount.";
      return;
    }
    else if (!prices) {
      errorMessage.textContent = "Failed to fetch prices. Please try again later.";
      return;
    }

    else{
      errorMessage.textContent = "Successful";
      errorMessage.style.background = `rgba(31, 190, 44, 0.201)`;
      errorMessage.style.color = `rgba(0, 255, 21, 0.737)`;

      setTimeout(() => {
        errorMessage.style.background = `rgba(190, 31, 55, 0.201)`;
        errorMessage.style.color = `rgba(255, 0, 38, 0.737)`;
        errorMessage.style.display = `none`;
      }, 3000);
    }

    const fromPrice = prices[COINS[dataValue1]].usd;
    const toPrice = prices[COINS[dataValue2]].usd;

    const fromValue = inputAmount * fromPrice;
    const toAmount = fromValue / toPrice;

  
    document.querySelector(`#recieve-amount`).value = `${toAmount.toFixed(6)} ${dataValue2}`;
    // recieveAmount = `You will receive ${toAmount.toFixed(6)} ${dataValue2}. Exchange rate: 1 ${dataValue1} = ${(fromPrice / toPrice).toFixed(6)} ${dataValue2}`;
  }
  else{
    errorMessage.style.display = `block`;
    errorMessage.textContent = "Select currency"
  }
  



  });
  
  
  
  
  
  document.addEventListener('DOMContentLoaded', () => {
    initializeDropdowns();
    setupTradingWidgets();
    // embeddedCode();


  });
  