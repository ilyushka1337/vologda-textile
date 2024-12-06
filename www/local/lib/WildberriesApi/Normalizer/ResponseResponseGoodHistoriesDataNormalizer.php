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
    class ResponseResponseGoodHistoriesDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uploadID', $data)) {
                $object->setUploadID($data['uploadID']);
                unset($data['uploadID']);
            }
            if (\array_key_exists('historyGoods', $data)) {
                $values = [];
                foreach ($data['historyGoods'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Placestart\WildberriesApi\Model\GoodHistory::class, 'json', $context);
                }
                $object->setHistoryGoods($values);
                unset($data['historyGoods']);
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
            if ($object->isInitialized('uploadID') && null !== $object->getUploadID()) {
                $data['uploadID'] = $object->getUploadID();
            }
            if ($object->isInitialized('historyGoods') && null !== $object->getHistoryGoods()) {
                $values = [];
                foreach ($object->getHistoryGoods() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['historyGoods'] = $values;
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
            return [\Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class => false];
        }
    }
} else {
    class ResponseResponseGoodHistoriesDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class;
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
            $object = new \Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('uploadID', $data)) {
                $object->setUploadID($data['uploadID']);
                unset($data['uploadID']);
            }
            if (\array_key_exists('historyGoods', $data)) {
                $values = [];
                foreach ($data['historyGoods'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Placestart\WildberriesApi\Model\GoodHistory::class, 'json', $context);
                }
                $object->setHistoryGoods($values);
                unset($data['historyGoods']);
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
            if ($object->isInitialized('uploadID') && null !== $object->getUploadID()) {
                $data['uploadID'] = $object->getUploadID();
            }
            if ($object->isInitialized('historyGoods') && null !== $object->getHistoryGoods()) {
                $values = [];
                foreach ($object->getHistoryGoods() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['historyGoods'] = $values;
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
            return [\Placestart\WildberriesApi\Model\ResponseResponseGoodHistoriesData::class => false];
        }
    }
}