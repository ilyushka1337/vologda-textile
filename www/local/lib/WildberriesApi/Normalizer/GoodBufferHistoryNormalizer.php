<?php

namespace Placestart\WildberriesApi\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Placestart\WildberriesApi\Runtime\Normalizer\CheckArray;
use Placestart\WildberriesApi\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GoodBufferHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\GoodBufferHistory::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\GoodBufferHistory::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\GoodBufferHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nmID', $data)) {
                $object->setNmID($data['nmID']);
                unset($data['nmID']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('sizeID', $data)) {
                $object->setSizeID($data['sizeID']);
                unset($data['sizeID']);
            }
            if (\array_key_exists('techSizeName', $data)) {
                $object->setTechSizeName($data['techSizeName']);
                unset($data['techSizeName']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
                unset($data['price']);
            }
            if (\array_key_exists('currencyIsoCode4217', $data)) {
                $object->setCurrencyIsoCode4217($data['currencyIsoCode4217']);
                unset($data['currencyIsoCode4217']);
            }
            if (\array_key_exists('discount', $data)) {
                $object->setDiscount($data['discount']);
                unset($data['discount']);
            }
            if (\array_key_exists('clubDiscount', $data)) {
                $object->setClubDiscount($data['clubDiscount']);
                unset($data['clubDiscount']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('errorText', $data)) {
                $object->setErrorText($data['errorText']);
                unset($data['errorText']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('nmID') && null !== $object->getNmID()) {
                $data['nmID'] = $object->getNmID();
            }
            if ($object->isInitialized('vendorCode') && null !== $object->getVendorCode()) {
                $data['vendorCode'] = $object->getVendorCode();
            }
            if ($object->isInitialized('sizeID') && null !== $object->getSizeID()) {
                $data['sizeID'] = $object->getSizeID();
            }
            if ($object->isInitialized('techSizeName') && null !== $object->getTechSizeName()) {
                $data['techSizeName'] = $object->getTechSizeName();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $object->getPrice();
            }
            if ($object->isInitialized('currencyIsoCode4217') && null !== $object->getCurrencyIsoCode4217()) {
                $data['currencyIsoCode4217'] = $object->getCurrencyIsoCode4217();
            }
            if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
                $data['discount'] = $object->getDiscount();
            }
            if ($object->isInitialized('clubDiscount') && null !== $object->getClubDiscount()) {
                $data['clubDiscount'] = $object->getClubDiscount();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('errorText') && null !== $object->getErrorText()) {
                $data['errorText'] = $object->getErrorText();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\GoodBufferHistory::class => false];
        }
    }
} else {
    class GoodBufferHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\GoodBufferHistory::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\GoodBufferHistory::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\GoodBufferHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('nmID', $data)) {
                $object->setNmID($data['nmID']);
                unset($data['nmID']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('sizeID', $data)) {
                $object->setSizeID($data['sizeID']);
                unset($data['sizeID']);
            }
            if (\array_key_exists('techSizeName', $data)) {
                $object->setTechSizeName($data['techSizeName']);
                unset($data['techSizeName']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
                unset($data['price']);
            }
            if (\array_key_exists('currencyIsoCode4217', $data)) {
                $object->setCurrencyIsoCode4217($data['currencyIsoCode4217']);
                unset($data['currencyIsoCode4217']);
            }
            if (\array_key_exists('discount', $data)) {
                $object->setDiscount($data['discount']);
                unset($data['discount']);
            }
            if (\array_key_exists('clubDiscount', $data)) {
                $object->setClubDiscount($data['clubDiscount']);
                unset($data['clubDiscount']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('errorText', $data)) {
                $object->setErrorText($data['errorText']);
                unset($data['errorText']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('nmID') && null !== $object->getNmID()) {
                $data['nmID'] = $object->getNmID();
            }
            if ($object->isInitialized('vendorCode') && null !== $object->getVendorCode()) {
                $data['vendorCode'] = $object->getVendorCode();
            }
            if ($object->isInitialized('sizeID') && null !== $object->getSizeID()) {
                $data['sizeID'] = $object->getSizeID();
            }
            if ($object->isInitialized('techSizeName') && null !== $object->getTechSizeName()) {
                $data['techSizeName'] = $object->getTechSizeName();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $object->getPrice();
            }
            if ($object->isInitialized('currencyIsoCode4217') && null !== $object->getCurrencyIsoCode4217()) {
                $data['currencyIsoCode4217'] = $object->getCurrencyIsoCode4217();
            }
            if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
                $data['discount'] = $object->getDiscount();
            }
            if ($object->isInitialized('clubDiscount') && null !== $object->getClubDiscount()) {
                $data['clubDiscount'] = $object->getClubDiscount();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('errorText') && null !== $object->getErrorText()) {
                $data['errorText'] = $object->getErrorText();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\GoodBufferHistory::class => false];
        }
    }
}