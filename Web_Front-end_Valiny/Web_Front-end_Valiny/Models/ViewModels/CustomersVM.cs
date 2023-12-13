using Microsoft.AspNetCore.Mvc.Rendering;
using Web_Front_end_Valiny.Models.DTO;

namespace Web_Front_end_Valiny.Models.ViewModels
{
    public class CustomersVM
    {
        public IEnumerable<SelectListItem> ListCustomers { get; set; }
        public CustomerDTO Customer { get; set; }

    }
}
