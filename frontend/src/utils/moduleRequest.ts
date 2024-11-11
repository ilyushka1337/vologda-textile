import ky from 'ky';

const moduleRequest = async (module: string, action: string, params: Record<string, string | number> = {}) => {
    const query = {
        action: `${module}.${action}`,
        sessid: window.sessid
    };

    const result = await ky<any>(`/bitrix/services/main/ajax.php?${new URLSearchParams(query).toString()}`, params).json()
    if (result.status == "error") {
        throw new Error("Ошибка")
    }
    return result
}
export default moduleRequest
