function isSearch(SearchBar) 
{
	if (SearchBar.search.value === "")
	{
		document.getElementById("searchjs01").innerHTML = "Please Enter Search Value"
		return false;
	}
}