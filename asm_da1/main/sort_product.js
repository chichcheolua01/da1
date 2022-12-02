const datasort = document.getElementById("sort_data")
datasort.onchange(
    this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value)
)