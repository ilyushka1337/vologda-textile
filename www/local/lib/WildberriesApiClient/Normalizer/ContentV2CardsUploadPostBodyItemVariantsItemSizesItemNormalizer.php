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
    class ContentV2CardsUploadPostBodyItemVariantsItemSizesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('techSize', $data)) {
                $object->setTechSize($data['techSize']);
                unset($data['techSize']);
            }
            if (\array_key_exists('wbSize', $data)) {
                $object->setWbSize($data['wbSize']);
                unset($data['wbSize']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
                unset($data['price']);
            }
            if (\array_key_exists('skus', $data)) {
                $values = [];
                foreach ($data['skus'] as $value) {
                    $values[] = $value;
                }
                $object->setSkus($values);
                unset($data['skus']);
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
            if ($object->isInitialized('techSize') && null !== $object->getTechSize()) {
                $data['techSize'] = $object->getTechSize();
            }
            if ($object->isInitialized('wbSize') && null !== $object->getWbSize()) {
                $data['wbSize'] = $object->getWbSize();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $object->getPrice();
            }
            if ($object->isInitialized('skus') && null !== $object->getSkus()) {
                $values = [];
                foreach ($object->getSkus() as $value) {
                    $values[] = $value;
                }
                $data['skus'] = $values;
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
            return [\Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class => false];
        }
    }
} else {
    class ContentV2CardsUploadPostBodyItemVariantsItemSizesItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class;
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
            $object = new \Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('techSize', $data)) {
                $object->setTechSize($data['techSize']);
                unset($data['techSize']);
            }
            if (\array_key_exists('wbSize', $data)) {
                $object->setWbSize($data['wbSize']);
                unset($data['wbSize']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($data['price']);
                unset($data['price']);
            }
            if (\array_key_exists('skus', $data)) {
                $values = [];
                foreach ($data['skus'] as $value) {
                    $values[] = $value;
                }
                $object->setSkus($values);
                unset($data['skus']);
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
            if ($object->isInitialized('techSize') && null !== $object->getTechSize()) {
                $data['techSize'] = $object->getTechSize();
            }
            if ($object->isInitialized('wbSize') && null !== $object->getWbSize()) {
                $data['wbSize'] = $object->getWbSize();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $object->getPrice();
            }
            if ($object->isInitialized('skus') && null !== $object->getSkus()) {
                $values = [];
                foreach ($object->getSkus() as $value) {
                    $values[] = $value;
                }
                $data['skus'] = $values;
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
            return [\Placestart\WildberriesApi\Model\ContentV2CardsUploadPostBodyItemVariantsItemSizesItem::class => false];
        }
    }
}