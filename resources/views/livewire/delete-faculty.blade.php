<div class="flex flex-col items-center justify-center p-2 bg-white dark:bg-gray-700">
    <h3>Confirm Delete</h3>
    <p>Are you sure you want to delete this faculty?</p></br>
    <div class="flex space-x-3 ">
       
        
        <button wire:click="deleteFaculty" class="btn btn-danger closeModal  bg-blue-500 w-20 h-8 text-white rounded-lg !important">Delete</button>
        <button wire:click="$emit('closeModal')" class="btn btn-secondary closeModal  border rounded-lg border-blue-700 w-20 h-8">Cancel</button>
    </div>

</div>
<script>
    var closeModals = document.querySelectorAll('.closeModal');

closeModals.forEach(function(closeModal) {
  closeModal.addEventListener('click', function() {
    setTimeout(function() {
      location.reload();
    }, 15); // Delay of 3 seconds before refreshing
  });
});
</script>
