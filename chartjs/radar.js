var marksData = {
    labels: ["Ventas y mercadotecnia", "Recepción/Citas/Expedientes", "Administración", "Planeacion y estrategia", "Farmacia",
    "Fiscal y legal", "Activos", "Recursos humanos", "Instalaciones", "Proyecto personal"],
    datasets: [{
        label: "Usuario",
        backgroundcolor: "blue",
        data: [2, 3, 1, 2 ,5, 3, 2, 3, 4, 4]},
        {
        label: "Average",
        backgroundcolor: "red",
        data: [2, 2.79, 1.78, 2.05, 1.89, 2.07, 1.57, 1.71, 2.67, 2.67]
    }]
};

var radarChart = new CharacterData(marksCanvas, {
    type: 'radar',
    data: marksData
})