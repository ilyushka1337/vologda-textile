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
    class ContentV2CardsErrorListGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('object', $data)) {
                $object->setObject($data['object']);
                unset($data['object']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('updateAt', $data)) {
                $object->setUpdateAt($data['updateAt']);
                unset($data['updateAt']);
            }
            if (\array_key_exists('errors', $data)) {
                $values = [];
                foreach ($data['errors'] as $value) {
                    $values[] = $value;
                }
                $object->setErrors($values);
                unset($data['errors']);
            }
            if (\array_key_exists('objectID', $data)) {
                $object->setObjectID($data['objectID']);
                unset($data['objectID']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('object') && null !== $object->getObject()) {
                $data['object'] = $object->getObject();
            }
            if ($object->isInitialized('vendorCode') && null !== $object->getVendorCode()) {
                $data['vendorCode'] = $object->getVendorCode();
            }
            if ($object->isInitialized('updateAt') && null !== $object->getUpdateAt()) {
                $data['updateAt'] = $object->getUpdateAt();
            }
            if ($object->isInitialized('errors') && null !== $object->getErrors()) {
                $values = [];
                foreach ($object->getErrors() as $value) {
                    $values[] = $value;
                }
                $data['errors'] = $values;
            }
            if ($object->isInitialized('objectID') && null !== $object->getObjectID()) {
                $data['objectID'] = $object->getObjectID();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class => false];
        }
    }
} else {
    class ContentV2CardsErrorListGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class;
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
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('object', $data)) {
                $object->setObject($data['object']);
                unset($data['object']);
            }
            if (\array_key_exists('vendorCode', $data)) {
                $object->setVendorCode($data['vendorCode']);
                unset($data['vendorCode']);
            }
            if (\array_key_exists('updateAt', $data)) {
                $object->setUpdateAt($data['updateAt']);
                unset($data['updateAt']);
            }
            if (\array_key_exists('errors', $data)) {
                $values = [];
                foreach ($data['errors'] as $value) {
                    $values[] = $value;
                }
                $object->setErrors($values);
                unset($data['errors']);
            }
            if (\array_key_exists('objectID', $data)) {
                $object->setObjectID($data['objectID']);
                unset($data['objectID']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('object') && null !== $object->getObject()) {
                $data['object'] = $object->getObject();
            }
            if ($object->isInitialized('vendorCode') && null !== $object->getVendorCode()) {
                $data['vendorCode'] = $object->getVendorCode();
            }
            if ($object->isInitialized('updateAt') && null !== $object->getUpdateAt()) {
                $data['updateAt'] = $object->getUpdateAt();
            }
            if ($object->isInitialized('errors') && null !== $object->getErrors()) {
                $values = [];
                foreach ($object->getErrors() as $value) {
                    $values[] = $value;
                }
                $data['errors'] = $values;
            }
            if ($object->isInitialized('objectID') && null !== $object->getObjectID()) {
                $data['objectID'] = $object->getObjectID();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Placestart\WildberriesApi\Model\ContentV2CardsErrorListGetResponse200DataItem::class => false];
        }
    }
}