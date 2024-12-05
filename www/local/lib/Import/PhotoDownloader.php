<?
namespace Placestart\Import;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\CachingHttpClient;
use Symfony\Component\HttpKernel\HttpCache\Store;

class PhotoDownloader
{
    function __construct(
        private string $uploadsPath,
        private string $cachePath,
        private HttpClientInterface $httpClient
    ) {
        $store = new Store($cachePath);
        $this->httpClient = new CachingHttpClient($this->httpClient, $store);
    }

    public function get(string $imgURL): string
    {
        $response = $this->httpClient->request('GET', $imgURL);
        $imgName = basename($imgURL);

        file_put_contents($this->uploadsPath . $imgName, $response->getContent());

        $this->saveFile($imgName);

        return $this->uploadsPath . $imgName;
    }

    private function saveFile(string $fileName): array
    {
        $file = \CFile::MakeFileArray($this->uploadsPath . $fileName);

        return $file;
    }
}