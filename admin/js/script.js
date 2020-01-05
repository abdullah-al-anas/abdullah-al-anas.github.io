$(document).ready(function(){
    
	var ctx = $("#mycanvas").get(0).getContext("2d");

	var data = [
		{
			value: 70,
			color: "#2F80ED",
			highlight: "#56CCF2",
			label: "Positive Ratings"
		},
		{
			value: 100,
			color: "#F2994A",
			highlight: "#F2C94C",
			label: "Booking Table"
		},
		{
			value: 60,
			color: "orange",
			highlight: "darkorange",
			label: "Visitors"
		},
        {
			value: 100,
			color: "yellow",
			highlight: "darkyellow",
			label: "Happy Client"
		},
        {
			value: 60,
			color: "red",
			highlight: "darkred",
			label: "Hospitality"
		}
	];

	var chart = new Chart(ctx).Doughnut(data);
});