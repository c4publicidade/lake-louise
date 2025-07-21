  // // Inicializa o mapa
  // var map = L.map('map').setView([-22.8682037, -47.0692926], 13);

  // // Definindo as camadas de mapa
  // var openStreetMapLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  //   attribution: '&copy; OpenStreetMap contributors',
  //   maxZoom: 19
  // });

  // var esriSatLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
  //   attribution: 'Tiles © Esri &mdash; Source: Esri, Earthstar Geographics',
  //   maxZoom: 19
  // });

  // var cartoDBLayer = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
  //   attribution: '&copy; OpenStreetMap &copy; CartoDB',
  //   subdomains: 'abcd',
  //   maxZoom: 19
  // });

  // var stamenTonerLayer = L.tileLayer('https://{s}.tile.stamen.com/toner/{z}/{x}/{y}.png', {
  //   attribution: 'Map tiles by Stamen Design, under CC BY 3.0. Data by OpenStreetMap, under ODbL.',
  //   maxZoom: 19
  // });

  // var stamenTerrainLayer = L.tileLayer('https://{s}.tile.stamen.com/terrain/{z}/{x}/{y}.jpg', {
  //   attribution: 'Map tiles by Stamen Design, under CC BY 3.0. Data by OpenStreetMap, under ODbL.',
  //   maxZoom: 19
  // });

  // // Camada inicial do mapa (pode ser qualquer uma dessas)
  // openStreetMapLayer.addTo(map);

  // // Criação de controle para trocar entre as camadas
  // var baseMaps = {
  //   "OpenStreetMap": openStreetMapLayer,
  //   "ESRI World Imagery": esriSatLayer,
  //   "CartoDB Positron": cartoDBLayer,
  //   "Stamen Toner": stamenTonerLayer,
  //   "Stamen Terrain": stamenTerrainLayer
  // };

  // L.control.layers(baseMaps).addTo(map);

  // // Pontos de exemplo
  // var pontos = [
  //   {
  //     lat: -22.865751,
  //     lng: -47.049736,
  //     titulo: 'Local 1',
  //     iconUrl: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/pranchetaLake.png'
  //   },
  //   {
  //     lat: -22.847793,
  //     lng: -47.063113,
  //     titulo: 'Local 12',
  //     iconUrl: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta12.png'
  //   },
  //   {
  //     lat: -22.834164,
  //     lng: -47.052147,
  //     titulo: 'Local 13',
  //     iconUrl: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta13.png'
  //   },
  //   {
  //     lat: -22.816625,
  //     lng: -47.069566,
  //     titulo: 'Local 14',
  //     iconUrl: 'https://c4publicidade.com.br/lakeLouiseNew/wp-content/themes/c4theme2025/img/map/icones/prancheta14.png'
  //   }
  // ];

  // // Adiciona os pontos com ícones personalizados
  // pontos.forEach(function(ponto) {
  //   var iconePersonalizado = L.icon({
  //     iconUrl: ponto.iconUrl,
  //     iconSize: [40, 40],
  //     iconAnchor: [20, 40],
  //     popupAnchor: [0, -40]
  //   });

  //   L.marker([ponto.lat, ponto.lng], { icon: iconePersonalizado })
  //     .addTo(map)
  //     .bindPopup(ponto.titulo);
  // });