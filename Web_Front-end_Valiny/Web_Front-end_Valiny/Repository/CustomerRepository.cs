using Web_Front_end_Valiny.Models.DTO;
using Web_Front_end_Valiny.Repository.Interfaces;

namespace Web_Front_end_Valiny.Repository
{
    public class CustomerRepository : Repository<CustomerDTO>, ICustomerRepository
    {
        public CustomerRepository(IHttpClientFactory httpClientFactory)
            : base(httpClientFactory)
        {

        }
    }
}
