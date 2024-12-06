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
    class SupplierTaskMetadataBufferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uploadID', $data)) {
                $object->setUploadID($data['uploadID']);
                unset($data['uploadID']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('uploadDate', $data)) {
                $object->setUploadDate(\DateTime::createFromFormat('Y-m-d', $data['uploadDate'])->setTime(0, 0, 0));
                unset($data['uploadDate']);
            }
            if (\array_key_exists('activationDate', $data)) {
                $object->setActivationDate(\DateTime::createFromFormat('Y-m-d', $data['activationDate'])->setTime(0, 0, 0));
                unset($data['activationDate']);
            }
            if (\array_key_exists('overAllGoodsNumber', $data)) {
                $object->setOverAllGoodsNumber($data['overAllGoodsNumber']);
                unset($data['overAllGoodsNumber']);
            }
            if (\array_key_exists('successGoodsNumber', $data)) {
                $object->setSuccessGoodsNumber($data['successGoodsNumber']);
                unset($data['successGoodsNumber']);
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
            if ($object->isInitialized('uploadID') && null !== $object->getUploadID()) {
                $data['uploadID'] = $object->getUploadID();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('uploadDate') && null !== $object->getUploadDate()) {
                $data['uploadDate'] = $object->getUploadDate()?->format('Y-m-d');
            }
            if ($object->isInitialized('activationDate') && null !== $object->getActivationDate()) {
                $data['activationDate'] = $object->getActivationDate()?->format('Y-m-d');
            }
            if ($object->isInitialized('overAllGoodsNumber') && null !== $object->getOverAllGoodsNumber()) {
                $data['overAllGoodsNumber'] = $object->getOverAllGoodsNumber();
            }
            if ($object->isInitialized('successGoodsNumber') && null !== $object->getSuccessGoodsNumber()) {
                $data['successGoodsNumber'] = $object->getSuccessGoodsNumber();
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
            return [\Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class => false];
        }
    }
} else {
    class SupplierTaskMetadataBufferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class;
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
            $object = new \Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uploadID', $data)) {
                $object->setUploadID($data['uploadID']);
                unset($data['uploadID']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            if (\array_key_exists('uploadDate', $data)) {
                $object->setUploadDate(\DateTime::createFromFormat('Y-m-d', $data['uploadDate'])->setTime(0, 0, 0));
                unset($data['uploadDate']);
            }
            if (\array_key_exists('activationDate', $data)) {
                $object->setActivationDate(\DateTime::createFromFormat('Y-m-d', $data['activationDate'])->setTime(0, 0, 0));
                unset($data['activationDate']);
            }
            if (\array_key_exists('overAllGoodsNumber', $data)) {
                $object->setOverAllGoodsNumber($data['overAllGoodsNumber']);
                unset($data['overAllGoodsNumber']);
            }
            if (\array_key_exists('successGoodsNumber', $data)) {
                $object->setSuccessGoodsNumber($data['successGoodsNumber']);
                unset($data['successGoodsNumber']);
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
            if ($object->isInitialized('uploadID') && null !== $object->getUploadID()) {
                $data['uploadID'] = $object->getUploadID();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('uploadDate') && null !== $object->getUploadDate()) {
                $data['uploadDate'] = $object->getUploadDate()?->format('Y-m-d');
            }
            if ($object->isInitialized('activationDate') && null !== $object->getActivationDate()) {
                $data['activationDate'] = $object->getActivationDate()?->format('Y-m-d');
            }
            if ($object->isInitialized('overAllGoodsNumber') && null !== $object->getOverAllGoodsNumber()) {
                $data['overAllGoodsNumber'] = $object->getOverAllGoodsNumber();
            }
            if ($object->isInitialized('successGoodsNumber') && null !== $object->getSuccessGoodsNumber()) {
                $data['successGoodsNumber'] = $object->getSuccessGoodsNumber();
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
            return [\Placestart\WildberriesApi\Model\SupplierTaskMetadataBuffer::class => false];
        }
    }
}