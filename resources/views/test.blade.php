@include('Themes.DefaultTheme.LinkScripts.headlinks')
@include('Themes.DefaultTheme.LinkScripts.scripttags')


<button type="button" class="btn btn-primary" onclick="openAddDisputeModal()">Add Dispute</button>
<button type="button" class="btn btn-primary" onclick="openCreateThemeModal()">Create Theme</button>




<!-- Generic Modal Structure -->
<div class="modal fade" id="genericModal" tabindex="-1" role="dialog" aria-labelledby="genericModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="genericModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Modal content will be dynamically populated here -->
        </div>
      </div>
    </div>
  </div>
  


<script>
    // Function to open a generic modal with specified title and content
    function openModal(title, content) {
      var modal = $('#genericModal');
      modal.find('.modal-title').text(title);
      modal.find('.modal-body').html(content);
      modal.modal('show');
    }
  
    // Example function to open a specific modal (Add Dispute)
    function openAddDisputeModal() {
      var title = 'Add Dispute';
      var formAction = '/add-dispute';
      var formContent = `
        <form action="${formAction}" method="post">
          <!-- Form fields for Add Dispute modal -->
          <label for="disputeTitle">Title:</label>
          <input type="text" id="disputeTitle" name="disputeTitle">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      `;
      openModal(title, formContent);
    }
  
    // Example function to open another specific modal (Create Theme)
    function openCreateThemeModal() {
      var title = 'Create Theme';
      var formAction = '/create-theme';
      var formContent = `
        <form action="${formAction}" method="post">
          <!-- Form fields for Create Theme modal -->
          <label for="themeName">Name:</label>
          <input type="text" id="themeName" name="themeName">
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      `;
      openModal(title, formContent);
    }
  </script>
  