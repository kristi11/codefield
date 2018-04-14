<script>
export default
{
	props : ['attributes'],



	methods : {
		    destroy()
		    {
	            axios.delete('/admin/projects/' + this.attributes.id);
	            // flash('project deleted');
        }	
	}
}
</script>