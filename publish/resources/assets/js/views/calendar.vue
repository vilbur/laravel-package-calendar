<template>
	<div>
	
		<h1 class="title is-1 has-text-centered">Calendar published</h1>
	
		<full-calendar :events="events"></full-calendar>
	</div>

	
</template>

<script>
	
export default {
	
	data() {
		return {
		  events: [
			{
				title  : 'event1',
				start  : this.getTimeStamp(),
			},
			{
				title  : 'event2',
				start  : this.getTimeStamp(),
				end    : this.getTimeStamp(),
			},
			{
				title  : 'event3',
				start  : this.getTimeStamp()+'T12:30:00',
				allDay : false,
			},
		  ]
		}
	 },
  methods: {
    getTimeStamp: function ()
	{
		var currentDate = new Date();
		return currentDate.getFullYear() + "-" +(currentDate.getMonth() + 1) + "-" + (currentDate.getDate() + 1);
    }
  }
	 
} 
</script>
  
 