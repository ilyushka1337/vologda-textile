<?
namespace Placestart\Import;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PhotoDownloader
{
    function __construct(
        private string $uploadsPath,
        private HttpClientInterface $httpClient
    ) {
        mkdir($this->uploadsPath, 0777, true);
    }

    public function get(string $imgURL): array
    {
        $response = $this->httpClient->request('GET', $imgURL);
        $imgName = basename($imgURL);

        file_put_contents($this->uploadsPath . $imgName, $response->getContent());

        return $this->saveFile($imgName);
    }

    private function saveFile(string $fileName): array
    {
        $file = \CFile::MakeFileArray($this->uploadsPath . $fileName);
        $file['MODULE_ID'] = 'iblock';
        $id = \CFile::SaveFile($file, 'import');

        if (intval($id) > 0) {
            return $file;
        }

        throw new Exception\FileSavingFailureException($fileName);
    }
}