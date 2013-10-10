		<script type="text/javascript">
			$(function(){
				var DataSet1=[
					{label: "Series1", data: 10},
					{label: "Series2", data: 30},
					{label: "Series3", data: 90},
					{label: "Series4", data: 70},
					{label: "Series5", data: 80},
					{label: "Series6", data: 80}
				];
				var options = {
					series: {
						pie: {show: true}
					}
				};
				$.plot($("#placeholdera"), DataSet1, options);
			});
		</script>
		<script type="text/javascript">
			$(function() {
				var d1 = [];
				for (var i = 0; i < 14; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
				var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];
				// A null signifies separate line segments
				var d3 = [[0, 12], [7, 12], null, [7, 2.5], [12, 2.5]];
				$.plot("#placeholderb", [ d1, d2, d3 ]);
			});
		</script>
