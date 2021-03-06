import useSWR from 'swr'

export const useFetch = (params, fetcher, options = {}) => {
    const { data: fetchedData, error } = useSWR(params, fetcher, options)
    const data = fetchedData?.data ?? fetchedData
    return { data, loading: !data && !error, error }
}
