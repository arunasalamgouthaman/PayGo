   <script>
        function setReminder() {
            var event = document.getElementById("event").value;
            var eventDate = document.getElementById("eventDate").value;
            var bill = document.getElementById("bill").value;
            var billDate = document.getElementById("billDate").value;

            var reminderText = "";

            if (event && eventDate) {
                reminderText += "Event Reminder: " + event + " on " + eventDate + "\n";
            }

            if (bill && billDate) {
                reminderText += "Bill Reminder: " + bill + " due on " + billDate;
            }

            if (reminderText !== "") {
                alert(reminderText);
            } else {
                alert("Please enter at least one event or bill reminder.");
            }
        }
    </script>